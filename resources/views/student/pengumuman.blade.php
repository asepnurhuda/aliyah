@extends('adminlte.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
            @if ($student->status == 'Diterima')
                <div class="card-header">
                    <h1>Selamat {{ $student->nama_depan }}, Anda <b>diterima</b> </h1>
                    <h2>Menjadi peserta didik di Madrasah Aliyah Miftahul Ulum Anggana. </h2>
                </div>
                <div class="card-body">
                    <p>Selanjutnya informasi akan dilakukan oleh sekretariat panitia PPDB Madrasah Aliyah Miftahul Ulum Anggana </p>
                </div>
            @elseif ($student->status == "Ditolak")
            <div class="card-header">
                    <h1>Mohon maaf {{ $student->nama_depan }}, Anda belum <b>diterima</b> menjadi peserta didik di Madrasah Aliyah Miftahul Ulum Anggana. </h1>
                </div>
                <div class="card-body">
                    <p>Alasan penolakan : {{ $student->alasan }}</p>
                </div>
            </div>
            @else
            <div class="card-header">
                    <h1>Belum ada informasi. </h1>
                </div>
            </div>
            @endif
        </div>
    </div>
@stop


