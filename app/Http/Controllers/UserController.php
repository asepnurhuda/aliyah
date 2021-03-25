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
}
