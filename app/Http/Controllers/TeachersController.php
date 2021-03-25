<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Course;

class TeachersController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $teachers = Teacher::where('nama', 'LIKE', '%'.$request->search.'%')->paginate(6);
            return view('adminlte.teachers.index', compact('teachers'));
        }else{
            $teachers = Teacher::paginate(8);
            return view('adminlte.teachers.index', compact('teachers'));
        }
    }

    public function add()
    {
        $courses = Course::all();
        return view('adminlte.teachers.add', compact('courses'));
    }

    public function create(Request $request)
    {
        //dd($request->all());
        $this->validate($request, [
            'nama' => 'required',
            'biografi' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'required',
        ]);
        Teacher::create([
            'nama' => $request->nama,
            'course_id' => $request->course_id,
            'biografi' => $request->biografi,
            'fb' => $request->fb,
            'ig' => $request->ig,
            'linkedin' => $request->linkedin,
            'deskripsi' =>$request->deskripsi,
            'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect()->route('teachers.index');
    }

    public function delete($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return back();
    }

    public function edit($id)
    {
        $courses = Course::all();
        $teacher = Teacher::findOrFail($id);
        return view('adminlte.teachers.edit', compact('teacher','courses'));
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'biografi' => 'required',
            'deskripsi' => 'required',
        ]);

        $teacher = Teacher::findOrFail($id);
        //dd($request->thumbnail);

        $old_thumbnail = $teacher->thumbnail;
        //($old_thumbnail);
        if( empty($request->thumbnail) ){
            $input = array_merge($request->all(), ['thumbnail' => $old_thumbnail]);
            $teacher->update($input);
            return redirect()->route('teachers.index')->with('sukses','Berhasil update data');
        }
            $teacher->update([
                'nama' => $request->nama,
                'course_id' => $request->course_id,
                'biografi' => $request->biografi,
                'fb' => $request->fb,
                'ig' => $request->ig,
                'linkedin' => $request->linkedin,
                'deskripsi' =>$request->deskripsi,
                'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect( route('teachers.index') )->with('sukses','Berhasil update data');;
    }
}
