@extends('adminlte.layouts.master')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12">
                @if(session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{ session('sukses') }}
                    </div>
                @endif
            </div>
            <div class="col-sm-6">
                <h1>Profile</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">PPDB Profil peserta</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                @if( empty($student->photo) )
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('images/default.jpg') }}"
                        alt="User profile picture">
                @elseif( !empty($student->photo) )
                    <img class="profile-user-img img-fluid img-circle"
                        src="{{ asset('images/'.$student->photo) }}"
                        alt="User profile picture">
                @endif
                </div>

                <h3 class="profile-username text-center">{!! $student->nama_depan.' '.$student->nama_belakang !!}</h3>

                <p class="text-muted text-center">Peserta PPDB</p>
                <a href="{{ route('ppdb.exportpdf', $student->id) }}" class="btn btn-success btn-block"><b>Cetak ke pdf</b></a>
                <a href="{{ route('ppdb.resetpassword', $student->user_id) }}" class="btn btn-danger btn-block"><b>Reset Password</b></a>
                
                </div>
                <!-- /.card-body -->  
            </div>
            <!-- /.card -->

            
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card">
            <div class="card-header p-2">
                <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Data Diri</a></li>
                <li class="nav-item"><a class="nav-link" href="#pendukung" data-toggle="tab">Data Pendukung</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Data Asal Sekolah</a></li>
                </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
                <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    
                        <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Nama Depan</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" readonly value="{{ $student->nama_depan }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Nama Belakang</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" readonly value="{{ $student->nama_belakang }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">No HP</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->nohp }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->gender }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail" class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail" readonly value="{{ $student->tempat_lahir }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->tanggal_lahir }}">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="inputExperience" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience" readonly>{!! $student->alamat !!}</textarea>
                            </div>
                        </div>
                    
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="pendukung">
                        <!-- The timeline -->
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">NIK</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->nik }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Warga Negara</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->warga_negara }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Status Nikah</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->nikah }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->agama }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Hobi</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->hobi }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Cita - Cita</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->cita_cita }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Anak Ke</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->anak_ke }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Jumlah Saudara</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->jml_saudara }}">
                            </div>
                        </div>

                    </div>
                    <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->nisn }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">NPSN Asal Sekolah</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->npsn_asal }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">PAUD <i>(jika ada)</i></label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->paud }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Jumlah Nilai Raport</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->jml_nilai_raport }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nilai Semester 1</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->sem_1 }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nilai Semester 2</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->sem_2 }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nilai Semester 3</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->sem_3 }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nilai Semester 4</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->sem_4 }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nilai Semester 5</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->sem_5 }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Nilai Semester 6</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" readonly value="{{ $student->sem_6 }}">
                            </div>
                        </div>

                        
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@stop