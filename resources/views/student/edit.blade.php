@extends('adminlte.layouts.master')
@section('header')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h1>Lengkapi Formulir Pendaftaran</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('student.update', $student->id) }}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label  for="no_pendaftaran">Nomor Pendaftaran</label>
                            <input name="no_pendaftaran" readonly type="text" class="form-control" id="no_pendaftaran" value="{{ $student->no_pendaftaran }}">
                        </div>
                        <div class="form-group" {{ $errors->has('photo') ? 'has-error' : '' }}>
                            <label for="photo">Pilih Foto</label>
                            <input name="photo" type="file" class="form-control" id="photo">
                            @if($errors->has('photo'))
                                <small id="photoHelp" class="text-danger">{{ $errors->first('photo') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nama_depan') ? 'has-error' : '' }}">
                            <label for="nama_depan">Nama Depan</label>
                            <input name="nama_depan" type="text" class="form-control" id="nama_depan" value="{{ old('nama_depan', $student->nama_depan) }}">
                            @if($errors->has('nama_depan'))
                                <small id="nama_depanHelp" class="text-danger">{{ $errors->first('nama_depan') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nama_belakang') ? 'has-error' : '' }}">
                            <label for="nama_belakang">Nama Belakang</label>
                            <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" value="{{ old('nama_belakang', $student->nama_belakang) }}">
                            @if($errors->has('nama_belakang'))
                                <small id="nama_belakangHelp" class="text-danger">{{ $errors->first('nama_belakang') }}</small>
                            @endif
                        </div>
                        
                        <div class="form-group">
                        <label for="gender">Jenis Kelamin</label>
                            <select name="gender" class="form-control">
                                <option {{old('gender',$student->gender)=="L" ? 'selected':''}} value="L">Laki-Laki</option>
                                <option {{old('gender',$student->gender)=="P" ? 'selected':''}} value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group {{ $errors->has('tempat_lahir') ? 'has-error' : '' }}">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input name="tempat_lahir" type="text" class="form-control" id="tempat_lahir" value="{{ old('tempat_lahir', $student->tempat_lahir) }}">
                            @if($errors->has('tempat_lahir'))
                                <small id="tempat_lahirHelp" class="text-danger">{{ $errors->first('tempat_lahir') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <input name="tanggal_lahir" type="date" class="form-control" id="date" value="{{ old('tanggal_lahir', $student->tanggal_lahir) }}">
                            @if($errors->has('tanggal_lahir'))
                                <small id="tanggalHelp" class="text-danger">{{ $errors->first('tanggal_lahir') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nohp') ? 'has-error' : '' }}">
                            <label for="nohp">No Handphone</label>
                            <input name="nohp" type="text" class="form-control" id="nohp" value="{{ old('nohp',$student->nohp) }}">
                            @if($errors->has('nohp'))
                                <small id="nohpHelp" class="text-danger">{{ $errors->first('nohp') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nik') ? 'has-error' : '' }}">
                            <label for="nik">NIK</label>
                            <input name="nik" type="text" class="form-control" id="nik" value="{{ old('nik', $student->nik) }}">
                            @if($errors->has('nik'))
                                <small id="nikHelp" class="text-danger">{{ $errors->first('nik') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('warga_negara') ? 'has-error' : '' }}">
                            <label for="warga_negara">Warga Negara</label>
                            <input name="warga_negara" type="text" class="form-control" id="warga_negara" value="{{ old('warga_negara',$student->warga_negara) }}">
                            @if($errors->has('warga_negara'))
                                <small id="warga_negaraHelp" class="text-danger">{{ $errors->first('warga_negara') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('agama') ? 'has-error' : '' }}">
                            <label for="agama">Agama</label>
                            <select class="form-control" name="agama" id="agama">
                                <option value="islam" @if($student->agama == 'islam') selected @endif>Islam</option>
                                <option value="kristen" @if($student->agama == 'kristen') selected @endif>Kristen</option>
                                <option value="katolik" @if($student->agama == 'katolik') selected @endif>Katolik</option>
                                <option value="budha" @if($student->agama == 'budha') selected @endif>Budha</option>
                                <option value="Hindu" @if($student->agama == 'Hindu') selected @endif>Hindu</option>
                                <option value="konghucu" @if($student->agama == 'konghucu') selected @endif>Khonghucu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea id="alamatHelp" name="alamat" type="text" class="form-control" id="alamat">{{ old('alamat', $student->alamat) }}</textarea>
                        </div>
                        <div class="form-group {{ $errors->has('hobi') ? 'has-error' : '' }}">
                            <label for="hobi">Hobi</label>
                            <input name="hobi" type="text" class="form-control" id="hobi" value="{{ old('hobi',$student->hobi) }}">
                            @if($errors->has('hobi'))
                                <small id="hobiHelp" class="text-danger">{{ $errors->first('hobi') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('cita_cita') ? 'has-error' : '' }}">
                            <label for="cita_cita">Cita - Cita</label>
                            <input name="cita_cita" type="text" class="form-control" id="cita_cita" value="{{ old('cita_cita', $student->cita_cita) }}">
                            @if($errors->has('cita_cita'))
                                <small id="cita_citaHelp" class="text-danger">{{ $errors->first('cita_cita') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('anak_ke') ? 'has-error' : '' }}">
                            <label for="anak_ke">Anak Ke</label>
                            <input name="anak_ke" type="text" class="form-control" id="anak_ke" value="{{ old('anak_ke', $student->anak_ke) }}">
                            @if($errors->has('anak_ke'))
                                <small id="anak_keHelp" class="text-danger">{{ $errors->first('anak_ke') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('jml_saudara') ? 'has-error' : '' }}">
                            <label for="jml_saudara">Jumlah Saudara</label>
                            <input name="jml_saudara" type="text" class="form-control" id="jml_saudara" value="{{ old('jml_saudara', $student->jml_saudara) }}">
                            @if($errors->has('jml_saudara'))
                                <small id="jml_saudaraHelp" class="text-danger">{{ $errors->first('jml_saudara') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('paud') ? 'has-error' : '' }}">
                            <label for="paud">PAUD <span>(Jika ada)</span></label>
                            <input name="paud" type="text" class="form-control" id="paud" value="{{ old('paud', $student->paud) }}">
                            @if($errors->has('paud'))
                                <small id="paudHelp" class="text-danger">{{ $errors->first('paud') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('tk') ? 'has-error' : '' }}">
                            <label for="tk">TK</label>
                            <input name="tk" type="text" class="form-control" id="tk" value="{{ old('tk', $student->tk) }}">
                            @if($errors->has('tk'))
                                <small id="tkHelp" class="text-danger">{{ $errors->first('tk') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nikah') ? 'has-error' : '' }}">
                            <label for="nikah">Status</label>
                            <select class="form-control" name="nikah" id="nikah">
                                <option value="Menikah" @if($student->nikah == 'Menikah') selected @endif>Menikah</option>
                                <option value="Belumnikah" @if($student->nikah == 'Belumnikah') selected @endif>Belum Menikah</option>
                            </select>
                            @if($errors->has('nikah'))
                            <small id="statusHelp" class="text-danger">{{ $errors->first('nikah') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nisn') ? 'has-error' : '' }}">
                            <label for="nisn">NISN</label>
                            <input name="nisn" type="text" class="form-control" id="nisn" value="{{ old('nisn', $student->nisn) }}">
                            @if($errors->has('nisn'))
                                <small id="nisnHelp" class="text-danger">{{ $errors->first('nisn') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('noseri_ijazah') ? 'has-error' : '' }}">
                            <label for="noseri_ijazah">No Seri Ijazah</label>
                            <input name="noseri_ijazah" type="text" class="form-control" id="noseri_ijazah" value="{{ old('noseri_ijazah', $student->noseri_ijazah) }}">
                            @if($errors->has('noseri_ijazah'))
                                <small id="noseri_ijazahHelp" class="text-danger">{{ $errors->first('noseri_ijazah') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('npsn_asal') ? 'has-error' : '' }}">
                            <label for="npsn_asal">NPSN Sekolah Asal</label>
                            <input name="npsn_asal" type="text" class="form-control" id="npsn_asal" value="{{ old('npsn_asal', $student->npsn_asal) }}">
                            @if($errors->has('npsn_asal'))
                                <small id="npsn_asalHelp" class="text-danger">{{ $errors->first('npsn_asal') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('no_skl') ? 'has-error' : '' }}">
                            <label for="no_skl">Nomor SKL</label>
                            <input name="no_skl" type="text" class="form-control" id="no_skl" value="{{ old('no_skl', $student->no_skl) }}">
                            @if($errors->has('no_skl'))
                                <small id="no_sklHelp" class="text-danger">{{ $errors->first('no_skl') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('jml_nilai_raport') ? 'has-error' : '' }}">
                            <label for="jml_nilai_raport">Jumlah Nilai Raport</label>
                            <input name="jml_nilai_raport" type="text" class="form-control" id="jml_nilai_raport" value="{{ old('jml_nilai_raport', $student->jml_nilai_raport) }}">
                            @if($errors->has('jml_nilai_raport'))
                                <small id="jml_nilai_raportHelp" class="text-danger">{{ $errors->first('jml_nilai_raport') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('sem_1') ? 'has-error' : '' }}">
                            <label for="sem_1">Nilai Semester 1</label>
                            <input name="sem_1" type="text" class="form-control" id="sem_1" value="{{ old('sem_1', $student->sem_1) }}">
                            @if($errors->has('sem_1'))
                                <small id="sem_1Help" class="text-danger">{{ $errors->first('sem_1') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('sem_2') ? 'has-error' : '' }}">
                            <label for="sem_2">Nilai Semester 2</label>
                            <input name="sem_2" type="text" class="form-control" id="sem_2" value="{{ old('sem_2', $student->sem_2) }}">
                            @if($errors->has('sem_2'))
                                <small id="sem_2Help" class="text-danger">{{ $errors->first('sem_2') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('sem_3') ? 'has-error' : '' }}">
                            <label for="sem_3">Nilai Semester 3</label>
                            <input name="sem_3" type="text" class="form-control" id="sem_3" value="{{ old('sem_3', $student->sem_3) }}">
                            @if($errors->has('sem_3'))
                                <small id="sem_3Help" class="text-danger">{{ $errors->first('sem_3') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('sem_4') ? 'has-error' : '' }}">
                            <label for="sem_4">Nilai Semester 4</label>
                            <input name="sem_4" type="text" class="form-control" id="sem_4" value="{{ old('sem_4', $student->sem_4) }}">
                            @if($errors->has('sem_4'))
                                <small id="sem_4Help" class="text-danger">{{ $errors->first('sem_4') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('sem_5') ? 'has-error' : '' }}">
                            <label for="sem_5">Nilai Semester 5</label>
                            <input name="sem_5" type="text" class="form-control" id="sem_5" value="{{ old('sem_5', $student->sem_5) }}">
                            @if($errors->has('sem_5'))
                                <small id="sem_5Help" class="text-danger">{{ $errors->first('sem_5') }}</small>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('sem_6') ? 'has-error' : '' }}">
                            <label for="sem_6">Nilai Semester 6</label>
                            <input name="sem_6" type="text" class="form-control" id="sem_6" value="{{ old('sem_6', $student->sem_6) }}">
                            @if($errors->has('sem_6'))
                                <small id="sem_6Help" class="text-danger">{{ $errors->first('sem_6') }}</small>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
<script>
  $( function() {
    $( "#date" ).datepicker({
        dateFormat:"yy-mm-dd",
    });
  } );
  </script>
@stop  

