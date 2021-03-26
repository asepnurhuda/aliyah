<?php

namespace App\Http\Controllers;

use App\Exports\StudentsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Student;
use PDF;
use Carbon\Carbon;
use App\User;

class PpdbController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('search')) {
            $students = Student::where([
                ['nama_depan','LIKE', '%'.$request->search.'%'],
                ['status', '=', 'peserta']
                ])->paginate(8);
            return view('adminlte.ppdb.index', compact('students'));
        }else{
        $students = Student::where('status', '=', 'peserta')->paginate(8);
        return view('adminlte.ppdb.index', compact('students'));
        }
    }

    public function detail($id)
    {
        $student = Student::findOrFail($id);
        return view('adminlte.ppdb.detail', compact('student'));
    }

    public function exportExcel() 
    {
        return Excel::download(new StudentsExport, 'ppdb.xlsx');
    }

    public function exportPdf($id) 
    {
        
        $student = Student::findOrFail($id);
        $pdf = PDF::loadView('adminlte.ppdb.studentpdf', compact('student'));

        return $pdf->download('student.pdf');
    }

    public function diterima($id)
    {
        $student = Student::findOrFail($id);
        $student->update([
            'status' => 'Diterima',
        ]);
        $student->save();

        return redirect()->route('ppdb.index');
    }

    public function ditolak($id)
    {
        $student = Student::findOrFail($id);
        $student->update([
            'status' => 'Ditolak',
        ]);
        $student->save();

        return redirect()->route('ppdb.index');
    }

    public function pesertaditerima(Request $request)
    {
        if($request->has('search')) {
            $students = Student::where([
                ['nama_depan','LIKE', '%'.$request->search.'%'],
                ['status', '=', 'Diterima']
                ])->paginate(8);
            return view('adminlte.ppdb.pesertaditerima', compact('students'));
        }else{
        $students = Student::where('status', '=', 'Diterima')->paginate(8);
        return view('adminlte.ppdb.pesertaditerima', compact('students'));
        }
    }

    public function pesertaditolak(Request $request)
    {
        if($request->has('search')) {
            $students = Student::where([
                ['nama_depan','LIKE', '%'.$request->search.'%'],
                ['status', '=', 'Ditolak']
                ])->paginate(8);
            return view('adminlte.ppdb.pesertaditolak', compact('students'));
        }else{
        $students = Student::where('status', '=', 'Ditolak')->paginate(8);
        return view('adminlte.ppdb.pesertaditolak', compact('students'));
        }
    }

    public function baru(Request $request)
    {
        if($request->has('search')) {
            $students = Student::where([
                ['nama_depan','LIKE', '%'.$request->search.'%'],
                ['status', '=', 'baru']
                ])->paginate(8);
            return view('adminlte.ppdb.baru', compact('students'));
        }else{
        $students = Student::where('status', '=', 'baru')->paginate(8);
        return view('adminlte.ppdb.baru', compact('students'));
        }
    }

    public function lengkapidata(Request $request)
    {
        if($request->has('search')) {
            $students = Student::where([
                ['nama_depan','LIKE', '%'.$request->search.'%'],
                ['status', '=', 'pendaftar']
                ])->paginate(8);
            return view('adminlte.ppdb.lengkapidata', compact('students'));
        }else{
        $students = Student::where('status', '=', 'pendaftar')->paginate(8);
        return view('adminlte.ppdb.lengkapidata', compact('students'));
        }
    }

    public function resetpassword($id)
    {
        $user = User::findOrFail($id);
        $user->update([
            'password' => bcrypt('12345')
        ]);
        return redirect()->back()->with('sukses', 'Berhasil reset password');
    }
}
