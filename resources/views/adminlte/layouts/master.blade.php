@include('adminlte.layouts.partials._header')
@include('adminlte.layouts.partials._navbar')
@include('adminlte.layouts.partials._leftsidebar')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
              <!-- Small boxes (Stat box) -->
              @yield('content')
              </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

@include('adminlte.layouts.partials._footer')
