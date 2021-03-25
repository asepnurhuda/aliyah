<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;

class ChangesPassController extends Controller
{
    public function change()
    {
        return view('adminlte.changepass.password');
    }

    public function store(Request $request, $id)
    {
        $user = User::find($id);
        if( Hash::check($request->input('oldpassword'),$user->password) ){
            if( $request->newpassword == $request->newpassword2 ){
                $user->password = bcrypt($request->newpassword);
                $user->save();
                return redirect('/')->with('success', 'Berhasil mengubah password, silakan login kembali');
            }else{
                return redirect()->back()->with('warning', 'New Password is mismatch');
            }
        }
        return redirect()->back()->with('warning','Old Password Not Correctly');                               

    }
}
