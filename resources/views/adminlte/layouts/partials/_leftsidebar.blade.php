<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
    <img src="{{ asset('images/default.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">MA Mitahul Ulum</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
        <img src="{{ asset('images/default.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
        <li class="nav-item menu-open">
            <a href="{{ route('dashboard') }}" class="nav-link">
            <i class="nav-icon fas fa-home"></i>
            <p>
                Dashboard
            </p>
            </a>
        </li>
        <!-- Menu user pendaftar -->
        @if(auth()->user()->role == 'pendaftar')

		<li class="nav-item">
            <a href="{{ route('student.detail', auth()->user()->student->id) }}" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>Lihat Data Diri</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('student.pengumuman', auth()->user()->student->id) }}" class="nav-link">
            <i class="nav-icon fas fa-bullhorn"></i>
            <p>Pengumuman</p>
            </a>
        </li>

        <!-- Menu user Administrator -->
        @elseif(auth()->user()->role == 'admin')

        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
                Lihat PPDB
                <i class="fas fa-angle-left right"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('ppdb.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Peserta PPDB</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ppdb.baru') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Baru buat akun</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ppdb.lengkapidata') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sedang melengkapi data</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ppdb.pesertaditerima') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Diterima</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('ppdb.pesertaditolak') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ditolak</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-edit"></i>
            <p>
                Posting Berita
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Semua Postingan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('posts.add') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Posting Baru</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="{{ route('categories.index') }}" class="nav-link">
            <i class="nav-icon fas fa-tags"></i>
            <p>Kategori Berita</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('courses.index') }}" class="nav-link">
            <i class="nav-icon fas fa-file"></i>
            <p>Mata Pelajaran</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('teachers.index') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>Guru</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('sliders.index') }}" class="nav-link">
            <i class="nav-icon fas fa-spinner"></i>
            <p>Slider</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('events.index') }}" class="nav-link">
            <i class="nav-icon fas fa-list-alt"></i>
            <p>Agenda Sekolah</p>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('profile.index') }}" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>Profile Sekolah</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.index') }}" class="nav-link">
            <i class="nav-icon fas fa-user-plus"></i>
            <p>Tambah Admin</p>
            </a>
        </li>
        @endif

        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-power-off"></i>
            <p>
                Logout
                <span class="right badge badge-danger">Keluar</span>
            </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('changepass', auth()->user()->id) }}" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
                Change Password
            </p>
            </a>
        </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>