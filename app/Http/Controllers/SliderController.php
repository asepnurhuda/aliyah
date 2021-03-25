<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;

class SliderController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $sliders = Slider::where('title', 'LIKE', '%'.$request->search.'%')->paginate(8);
            return view('adminlte.sliders.index', compact('sliders'));
        }else{
            $sliders = Slider::paginate(8);
            return view('adminlte.sliders.index', compact('sliders'));
        }
    }

    public function add()
    {
        return view('adminlte.sliders.add');
    }

    public function create(Request $request)
    {
        $slider = Slider::create([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect()->route('sliders.index');
    }

    public function delete($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return back();
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);
        return view('adminlte.sliders.edit', compact('slider'));
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $slider = Slider::findOrFail($id);
        $old_thumbnail = $slider->thumbnail;
        //($old_thumbnail);
        if( empty($request->thumbnail) ){
            $input = array_merge($request->all(), ['thumbnail' => $old_thumbnail]);
            $slider->update($input);
            return redirect()->route('sliders.index')->with('sukses','Berhasil update slider');
        }
        $slider->update([
            'title' => $request->title,
            'content' => $request->content,
            'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect()->route('sliders.index');
    }
}
