<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIMPEG</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (auth()->user()->foto == null)
                    <img src="{{ 'https://picsum.photos/' . 100 }}" class="img-circle elevation-2"
                        style="width: 40px;height:40px;object-fit:cover" alt="User Image">
                @else
                    @php
                        $foto = auth()->user()->foto;
                    @endphp
                    <img src="{{ asset("/foto_pegawai/$foto") }}" class="img-circle elevation-2"
                        style="width: 40px;height:40px;object-fit:cover" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ auth()->user()['email'] }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar nav-collapse-hide-child nav-child-indent flex-column"
                data-widget="treeview" role="menu" data-accordion="false" id="list-sidebar">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                {{-- Dashboard --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-line bkg-blue"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                {{-- Data Pegawai --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dataPegawai') }}"
                        class="nav-link {{ request()->routeIs('admin.dataPegawai*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user bkg-red"></i>
                        <p>
                            Data Pegawai
                        </p>
                    </a>
                </li>
                {{-- Data Mapel --}}
                <li class="nav-item">
                    <a href="{{ route('admin.mapel') }}"
                        class="nav-link {{ request()->routeIs('admin.mapel*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book bkg-green"></i>
                        <p>
                            Mata Pelajaran
                        </p>
                    </a>
                </li>
                {{-- Data Mapel --}}
                <li class="nav-item">
                    <a href="{{ route('admin.jadwal') }}"
                        class="nav-link {{ request()->routeIs('admin.jadwal*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-calendar bkg-purple"></i>
                        <p>
                            Jadwal
                        </p>
                    </a>
                </li>
                {{-- Data Absensi --}}
                <li class="nav-item">
                    <a href="{{ route('admin.absensi') }}"
                        class="nav-link {{ request()->routeIs('admin.absensi*') ? 'active' : '' }}"
                        style="border-bottom: 1px solid #4f5962">
                        <i class="nav-icon fas fa-fingerprint bkg-yellow"></i>
                        <p>
                            Absensi
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.riwayatKeluarga*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('admin.riwayatKeluarga*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-user-friends  bkg-purple"></i>
                        <p>
                            Riwayat Keluarga
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.riwayatKeluarga.suamiIstri') }}"
                                class="nav-link {{ request()->routeIs('admin.riwayatKeluarga.suamiIstri*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Suami / Istri</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.riwayatKeluarga.anak') }}"
                                class="nav-link {{ request()->routeIs('admin.riwayatKeluarga.anak*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Anak</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.riwayatKeluarga.orangTua') }}"
                                class="nav-link {{ request()->routeIs('admin.riwayatKeluarga.orangTua*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Orang Tua</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.riwayatPendidikan*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('admin.riwayatPendidikan*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-graduation-cap bkg-green"></i>
                        <p>
                            Riwayat Pendidikan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.riwayatPendidikan.sekolah') }}"
                                class="nav-link {{ request()->routeIs('admin.riwayatPendidikan.sekolah*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sekolah</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.riwayatPendidikan.bahasa') }}"
                                class="nav-link {{ request()->routeIs('admin.riwayatPendidikan.bahasa*') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bahasa</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-briefcase bkg-blue-2"></i>
                        <p>
                            Kepegawaian
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Jabatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pangkat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Hukuman</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Diklat</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penghargaan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Penugasan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Seminar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Cuti</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Latihan Jabatan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Tunjangan</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Izin Kawin</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- SKP --}}
                <li class="nav-item">
                    <a href="{{ route('admin.skp.tambah') }}"
                        class="nav-link {{ request()->routeIs('admin.skp*') ? 'active' : '' }}"
                        style="border-bottom: 1px solid #4f5962">
                        <i class="nav-icon fas fa-layer-group bkg-blue-2"></i>
                        <p>
                            SKP
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link " onclick="logout(event)">
                        <i class="nav-icon fas fa-sign-out-alt bkg-red"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
    <!-- /.sidebar -->
</aside>
