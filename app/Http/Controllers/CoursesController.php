<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CoursesController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $courses = Course::where('nama', 'LIKE', '%'.$request->search.'%')->paginate(8);
            return view('adminlte.courses.index', compact('courses'));
        }else{
            $courses = Course::paginate(6);
            return view('adminlte.courses.index', compact('courses'));
        }
    }

    public function add()
    {
        return view('adminlte.courses.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'durasi' => 'required',
            'deskripsi' => 'required',
        ]);
        $course = Course::create($request->all());
        return redirect()->route('courses.index');
    }

    public function delete($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return back();
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('adminlte.courses.edit', compact('course'));
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required',
            'durasi' => 'required',
            'deskripsi' => 'required',
        ]);
        $course = Course::findOrFail($id);
        $course->update($request->all());
        return redirect( route('courses.index') );
    }

}
