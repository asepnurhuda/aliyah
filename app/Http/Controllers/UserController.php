<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', '=', 'admin')->get();
        return view('adminlte.admin.index', compact('users'));
    }

    public function create(Request $request)
    {
        
        $user = new User;
        $user->role = 'admin';
        $user->name = $request->name;
        if (User::where('email', '=', $request->email)->exists()) {
            return redirect()->back()->with('gagal','Email sudah terdaftar, silahkan gunakan e-mail lainnya.');
        }
        $user->email = $request->email;
        if ($request->password != $request->password2 )
        {
            return redirect()->back()->with('gagal','Password tidak sama.');
        }
        $user->password = bcrypt($request->password);
        $user->remember_token = Str::random(60);
        $user->save();

        return redirect()->route('admin.index');

    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return back();
    }

    public function edit($id)
    {
        $admin = User::findOrFail($id);
        return view('adminlte.admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $admin = User::findOrFail($id);
        $adminOldPassword = $admin->password;

        if( !$request->password ){
            $admin->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $adminOldPassword,
                ]);
            
                return redirect()->route('admin.index');
            }

        if($request->password != $request->password2 ){
            return redirect()->back()->with('gagal', 'Password tidak sama');
        }
        $admin->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            ]);
        return redirect()->route('admin.index');
    }
}
