<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">MYIST</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-2 pb-2 mb-2 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @hasanyrole('admin')
                    <li class="nav-item">
                        <a href="{{ route('aset.index') }}"
                            class="nav-link {{ Request::is('admin/aset') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Aset
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('pinjam.index') }}"
                            class="nav-link {{ Request::is('admin/pinjam') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Izin Pinjam
                            </p>
                        </a>
                    </li>
                @endhasanyrole
                <li class="nav-item {{ Request::is('admin/pengguna', 'admin/jabatan') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ Request::is('admin/pengguna', 'admin/jabatan') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Pengguna
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('pengguna.index') }}"
                                class="nav-link {{ Request::is('admin/pengguna') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengguna</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('jabatan.index') }}"
                                class="nav-link {{ Request::is('admin/jabatan') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jabatan Pengguna</p>
                            </a>
                        </li>
                    </ul>
                </li>
                @hasanyrole('admin')
                    <li class="nav-item">
                        <a href="#" class="nav-link {{ Request::is('jenis') ? 'open' : '' }}">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Master
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    @endhasanyrole
                    @hasanyrole('admin')
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('jenis.index') }}"
                                    class="nav-link {{ Request::is('jenis') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-ico{{ Request::is('jenis') ? 'active' : '' }}n"></i>
                                    <p>Jenis</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('tipe.index') }}"
                                    class="nav-link {{ Request::is('tipe') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Tipe</p>
                                </a>
                            </li>
                        @endhasanyrole
                        @hasanyrole('admin')
                            <li class="nav-item">
                                <a href="{{ route('ruang.index') }}"
                                    class="nav-link {{ Request::is('ruang') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Ruang</p>
                                </a>
                            @endhasanyrole
                            @hasanyrole('admin')
                            <li class="nav-item">
                                <a href={{ route('dosen.index') }}
                                    class="nav-link {{ Request::is('dosen') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dosen</p>
                                </a>
                            </li>
                    </li>
                @endhasanyrole
                @hasanyrole('admin')
                    <li class="nav-item">
                        <a href={{ route('lab.index') }} class="nav-link {{ Request::is('lab') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Laboratorium</p>
                        </a>
                    </li>
                @endhasanyrole
                @hasanyrole('admin')
                    <li class="nav-item">
                        <a href={{ route('hakakses.index') }}
                            class="nav-link {{ Request::is('hakakses') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>HAK ASKES</p>
                        </a>
                    </li>
                </ul>
                </li>
            @endhasanyrole
            {{-- @hasanyrole('') --}}
            <li class="nav-item">
                <a href={{ route('laporan.index') }} class="nav-link {{ Request::is('laporan') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-edit"></i>
                    <p>
                        Laporan
                    </p>
                </a>
            </li>
            {{-- @endhasanyrole --}}
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" href="#" class="nav-link">
                    <i class="nav-icon fas fa-lock"></i>
                    <p>
                        Keluar
                    </p>
                </button>
            </form>
            </li>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
