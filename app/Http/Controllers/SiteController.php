<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Student;
use App\User;
use App\Post;
use App\Category;
use App\Slider;
use App\Profile;
use App\Teacher;
use App\Course;
use App\Event;

class SiteController extends Controller
{
    public function home()
    {
        $posts = Post::latest()->take(3)->get();
        $profile = Profile::latest()->first();
        $sliders = Slider::latest()->take(3)->get();
        $events = Event::latest()->take(3)->get();
        $teachers = Teacher::latest()->take(4)->get();
        $postfeatured = Post::latest()->first();
        return view('edubin.index',compact('posts','teachers','postfeatured','sliders', 'profile','events'));
    }

    public function daftar()
    {
        return view('edubin.ppdb.daftar');
    }

    public function create(Request $request)
    {
        //bikin nomor pendaftaran
        $awal = 'MA-MU';
        $bulanRomawi = array("", "I","II","III", "IV", "V","VI","VII","VIII","IX","X", "XI","XII");
        $noPendaftarAkhir = last(explode('/',Student::max('no_pendaftaran')));
        $no = 1;
        if( !$noPendaftarAkhir ){
            $no_pendaftaran = date('Y') . '/' . $awal . '/' . $bulanRomawi[date('n')] . '/' . sprintf('%03s', $no);
        }else{
            $no_pendaftaran = date('Y') . '/' . $awal . '/' . $bulanRomawi[date('n')] . '/' . sprintf("%03s", abs($noPendaftarAkhir + 1));
        }

        //insert ke tabel user
        $user = new User;
        $user->role = 'pendaftar';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        if (User::where('email', '=', $request->email)->exists()) {
            return redirect()->back()->with('gagal','Email sudah terdaftar, silahkan gunakan e-mail lainnya.');
        }
        if( $request->password == $request->password2 )
        {
            $user->password = bcrypt($request->password);
        }
        $user->remember_token = Str::random(60);
        $user->save();

        //inser ke tabel student
        $request->request->add([
            'user_id' => $user->id,
            'no_pendaftaran' => $no_pendaftaran,
            ]);
        $request->merge([
            'status' => 'baru',
        ]);
        
        Student::create($request->all());
        return redirect('/daftar/terdaftar')->with('sukses', 'Pendaftaran Berhasil, silahkan login untuk melengkapi data Anda.');
    }

    public function terdaftar()
    {
        return view('edubin.ppdb.terdaftar');
    }

    public function profil()
    {
        $profile = Profile::latest()->first();
        return view('edubin.profil', compact('profile'));
    }

    public function allPosts()
    {
        $posts = Post::paginate(3);
        $categories = Category::all();
        return view('edubin.posts.allpost', compact('posts', 'categories'));
    }

    public function singlePost($slug)
    {
        $post = Post::where('slug','=',$slug)->first();
        $categories = Category::all();
        return view('edubin.posts.singlepost', compact('post', 'categories'));
    }

    public function allTeachers()
    {
        $allteachers = Teacher::paginate(8);
        $courses = Course::all();
        return view('edubin.teachers.allteachers',compact('allteachers','courses'));
    }

    public function singleTeacher($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('edubin.teachers.singleteacher', compact('teacher'));
    }

    public function allEvents()
    {
        $events = Event::paginate(8);
        return view('edubin.events.allevents', compact('events'));
    }

    public function singleEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('edubin.events.singleevent', compact('event'));
    }

}
