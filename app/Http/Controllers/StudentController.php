<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Student;
use App\User;
use PDF;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $students = Student::where('nama_depan', 'LIKE', '%'.$request->search.'%')->paginate(8);
            return view('students.index', compact('students'));
        }else{
        $students = Student::paginate(20);
        return view('student.index', compact('students'));
        }
    }
    public function detail($id)
    {
        $student = Student::findOrFail($id);
        return view('student.detail', compact('student'));
    }

    public function create(Request $request)
    {
        //insert ke tabel user
        
        $user = new User;
        $user->name = $request->nama_depan;
        $user->role = 'siswa';
        $user->email = $request->email;
        $user->password = bcrypt('12345');
        $user->remember_token = Str::random(60);
        $user->save();

        //insert ke tabel siswa
        $request->request->add([ 'user_id' => $user->id ]);
            
        Student::create($request->all());
        return redirect('student')->with('sukses', 'Data berhasil ditambah');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        return view('student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama_depan' => 'required|min:3',
            'nama_belakang' => 'required',
            'nohp' => 'required|numeric',
            'nisn' => 'required|numeric',
            'noseri_ijazah' => 'required',
            'nik' => 'required|numeric',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_belakang' => 'required',
            'nama_belakang' => 'required',
            'npsn_asal' => 'required|numeric',
            'agama' => 'required',
            'warga_negara' => 'required',
            'gender' => 'required',
            'hobi' => 'required',
            'cita_cita' => 'required',
            'anak_ke' => 'required|numeric',
            'jml_saudara' => 'required|numeric',
            'tk' => 'required',
            'jml_nilai_raport'  => 'required|numeric',
            'sem_1' => 'required|numeric',
            'sem_2' => 'required|numeric',
            'sem_3' => 'required|numeric',
            'sem_4' => 'required|numeric',
            'sem_5' => 'required|numeric',
            'sem_6' => 'required|numeric',
            'no_skl' => 'required',
            'alamat' => 'required',
            'nikah' => 'required',
            'photo' => 'mimes:png,jpg,jpeg|max:2048'
        ]);
        
        //dd($request->all());

        $student = Student::findOrFail($id);
        if($student->user->role == 'pendaftar'){
            $request->request->add(['status' => 'pendaftar']);
            
            $student->update($request->all());
            if($request->hasFile('photo')){
                $avatarName = $request->file('photo')->getClientOriginalName();
                $avatarRandomName = Str::random(40);
                $avatarExtentionName = explode('.',$avatarName);
                $avatarNewName = $avatarRandomName.'.'.end($avatarExtentionName);
                $request->file('photo')->move('images/',$avatarNewName);
                $student->photo = $avatarNewName;
                $student->save();
                return redirect()->route('dashboard');
            }
            return redirect()->route('dashboard');
        }
            
            //dd($student);
            $student->update($request->all());
            //dd($request->all());
            if($request->hasFile('avatar')){
                $avatarName = $request->file('avatar')->getClientOriginalName();
                $avatarRandomName = Str::random(40);
                $avatarExtentionName = explode('.',$avatarName);
                $avatarNewName = $avatarRandomName.'.'.end($avatarExtentionName);
                $request->file('avatar')->move('images/',$avatarNewName);
                $student->avatar = $avatarNewName;
                $student->save();
            }
            
            return redirect( route('dashboard') )->with('sukses', 'Berhasil perbaharui data');
    }

    public function ppdb($id)
    {
        $student = Student::findOrFail($id);
        $student->update([
            'status' => 'peserta'
        ]);
        $student->save();
        return redirect()->route('dashboard')->with('sukses', 'Terima kasih atas partisipasi Anda. Proses pendaftaran dilanjutkan ke Panitia PPDB');
    }

    public function exportPdf($id) 
    {
        
        $student = Student::findOrFail($id);
        $pdf = PDF::loadView('student.pdf', compact('student'));

        return $pdf->download('pendaftaran.pdf');
    }

    public function pengumuman($id)
    {
        $student = Student::findOrFail($id);
        return view('student.pengumuman', compact('student'));
    }
}
