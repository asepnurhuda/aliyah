<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class EventsController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $events = Event::where('name', 'LIKE', '%'.$request->search.'%')->paginate(8);
            return view('adminlte.events.index', compact('events'));
        }else{
            $events = Event::paginate(8);
            return view('adminlte.events.index', compact('events'));
        }
    }

    public function add()
    {
        return view('adminlte.events.add');
    }

    public function create(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'date' => 'required',
            'start' => 'required',
            'finish' => 'required',
            'room' => 'required',
            'address' => 'required'
        ]);
        Event::create([
            'name' => $request->name,
            'description' => $request->description,
            'thumbnail' => $request->thumbnail,
            'date' => $request->date,
            'start' => $request->start,
            'finish' => $request->finish,
            'room' => $request->room,
            'address' => $request->address,
            'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect()->route('events.index');
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return back();
    }

    public function edit($id)
    {
        $event = Event::findOrFail($id);
        return view('adminlte.events.edit', compact('event'));
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'date' => 'required',
            'start' => 'required',
            'finish' => 'required',
            'room' => 'required',
            'address' => 'required'
        ]);

        $event = Event::findOrFail($id);
        $old_thumbnail = $event->thumbnail;
        //($old_thumbnail);
        if( empty($request->thumbnail) ){
            $input = array_merge($request->all(), ['thumbnail' => $old_thumbnail]);
            $event->update($input);
            return redirect()->route('events.index')->with('sukses','Berhasil update agenda');
        }
        $event->update([
            'name' => $request->name,
            'description' => $request->description,
            'thumbnail' => $request->thumbnail,
            'date' => $request->date,
            'start' => $request->start,
            'finish' => $request->finish,
            'room' => $request->room,
            'address' => $request->address,
            'thumbnail' => substr($request->thumbnail,18),
        ]);
        return redirect( route('events.index') );
    }


}
