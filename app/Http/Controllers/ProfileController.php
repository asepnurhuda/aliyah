<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;

class ProfileController extends Controller
{
    public function index()
    {
        $profiles = Profile::paginate(4);
        return view('adminlte.profile.index', compact('profiles'));
    }

    public function add()
    {
        return view('adminlte.profile.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'sekilas' => 'required',
            'pilih_kami' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tentang_kami' => 'required',
            'thumbnail' => 'required',
        ]);

        Profile::create([
            'sekilas' => $request->sekilas,
            'pilih_kami' => $request->pilih_kami,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tentang_kami' => $request->tentang_kami,
            'thumbnail' => substr($request->thumbnail,18),
            ]);
        return redirect()->route('profile.index');
    }

    public function delete($id)
    {
        $profile = Profile::findOrFail($id);
        $profile->delete();
        return back();
    }

    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('adminlte.profile.edit', compact('profile'));
    } 

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'sekilas' => 'required',
            'pilih_kami' => 'required',
            'visi' => 'required',
            'misi' => 'required',
            'tentang_kami' => 'required',
        ]);
        $profile = Profile::findOrFail($id);
        $old_thumbnail = $profile->thumbnail;

        if( empty($request->thumbnail) ){
            $input = array_merge($request->all(), ['thumbnail' => $old_thumbnail]);
            $profile->update($input);
            return redirect()->route('profile.index')->with('sukses','Berhasil update profile');
        }
        
        $profile->update([
            'sekilas' => $request->sekilas,
            'pilih_kami' => $request->pilih_kami,
            'visi' => $request->visi,
            'misi' => $request->misi,
            'tentang_kami' => $request->tentang_kami,
            'thumbnail' => substr($request->thumbnail,18),
            ]);
        return redirect( route('profile.index') );
    }
}
