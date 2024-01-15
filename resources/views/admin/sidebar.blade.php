<nav id="sidebar">

                {{-- <div class="navbar-nav theme-brand flex-row  text-center">
                    <div class="nav-logo">
                        <div class="nav-item theme-logo">
                            <a href="./index.html">
                                <img src="{{ asset('cork-v3/src/assets/img/logo.svg') }}" class="navbar-logo" alt="logo">
                            </a>
                        </div>
                        <div class="nav-item theme-text">
                            <a href="./index.html" class="nav-link"> CORK </a>
                        </div>
                    </div>
                    <div class="nav-item sidebar-toggle">
                        <div class="btn-toggle sidebarCollapse">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                        </div>
                    </div>
                </div> --}}
                <div class="shadow-bottom"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">

                    @php
                        $a = Auth::user()->level ;
                    @endphp
                    @if ( $a == '1' )

                    <li class="menu active">
                        <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span>Dashboard</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{ url('map')}}"> home </a>
                            </li>


                            {{-- <li>
                                <a href="{{ url('chart')}}"> CHARTS </a>
                            </li> --}}
                        </ul>
                    </li>

                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class="menu">
                        <a href="#peta" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="map"></i>
                                <span>Peta</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="peta" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{ url('map') }}">Peta Wilayah </a>
                            </li>
                            {{-- <li>
                                <a href="{{ url('/draw') }}"> Tambah Peta Wilayah </a>
                            </li> --}}
                            {{-- <li>
                                <a href="{{ url('map/create') }}"> Tambah Marker </a>
                            </li> --}}
                            <li>
                                <a href="{{ url('/draw/tabel') }}"> Tabel Wilayah </a>
                            </li>
                            <li>
                                <a href="{{ url('/marker/tabel') }}"> Tabel Marker </a>
                            </li>
                            {{-- <li>
                                <a href="{{ url('/kegiatan') }}"> Kegiatan </a>
                            </li>
                            <li>
                                <a href="{{ url('/aktivitas_kader') }}"> Aktivitas </a>
                            </li> --}}
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#diagram" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="icon_container">
                                <i data-feather="trending-up"></i>
                                 <span>Diagram</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="diagram" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{ url('chart-aman-gowa')}}">Gowa</a>
                            </li>
                            <li>
                                <a href="{{ url('chart-majene') }}"> Majene </a>
                            </li>
                            <li>
                                <a href="{{ url('chart-mamasa') }}">Mamasa</a>
                            </li>
                            <li>
                                <a href="{{ url('chart-maros') }}">Maros</a>
                            </li>
                            <li>
                                <a href="{{ url('chart-sidrap') }}">Sidrap</a>
                            </li>
                            <li>
                                <a href="{{ url('chart-sinjai') }}">Sinjai</a>
                            </li>
                            <li>
                                <a href="{{ url('chart-toraya') }}">Toraya</a>
                            </li>
                            <li>
                                <a href="{{ url('AMAN-Massenrempulu')}}">Massenrempulu</a>
                            </li>
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="users"></i>
                                <span>Kader</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                            {{-- <li>
                                <a href="{{ url('/anggota') }}"> Data Kader </a>
                            </li> --}}
                            <li>
                                <a href="{{ url('/kader_aman') }}"> Kader </a>
                            </li>
                            {{-- <li>
                                <a href="{{ url('/kegiatan') }}"> Kegiatan </a>
                            </li>
                            <li>
                                <a href="{{ url('/aktivitas_kader') }}"> Aktivitas </a>
                            </li> --}}
                        </ul>
                    </li>

                    <li class="menu">
                        <a href="{{ url('/kegiatan_aman')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="clipboard"></i>
                                <span>Kegiatan AMAN</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="{{ url('/anggota_aman')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <i data-feather="clipboard"></i>
                                <span>Anggota AMAN</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="#users" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                <span>Users</span>
                            </div>
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                            </div>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="users" data-bs-parent="#accordionExample">
                            <li>
                                <a href="{{ url('daftar-user')}}"> Daftar User </a>
                            </li>
                            <li>
                                <a href="{{ url('register')}}">Registrasi Admin</a>
                            </li>
                            <li>
                                <a href="{{ url('register-user') }}">Registrasi User</a>
                            </li>
                        </ul>
                    </li>

                    @elseif ($a == '2')

                        <li class="menu active">
                            <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    <span>Dashboard</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="dashboard" data-bs-parent="#accordionExample">
                                <li>
                                    <a href="{{ url('dashboard')}}"> Peta </a>
                                </li>


                                {{-- <li>
                                    <a href="{{ url('chart')}}"> CHARTS </a>
                                </li> --}}
                            </ul>
                        </li>

                        <li class="menu">
                            <a href="#diagram" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="icon_container">
                                    <i data-feather="trending-up"></i>
                                     <span>Diagram</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="diagram" data-bs-parent="#accordionExample">
                                <li>
                                    <a href="{{ url('aman-gowa')}}">Gowa</a>
                                </li>
                                <li>
                                    <a href="{{ url('majene') }}"> Majene </a>
                                </li>
                                <li>
                                    <a href="{{ url('mamasa') }}">Mamasa</a>
                                </li>
                                <li>
                                    <a href="{{ url('maros') }}">Maros</a>
                                </li>
                                <li>
                                    <a href="{{ url('sidrap') }}">Sidrap</a>
                                </li>
                                <li>
                                    <a href="{{ url('sinjai') }}">Sinjai</a>
                                </li>
                                <li>
                                    <a href="{{ url('toraya') }}">Toraya</a>
                                </li>
                                <li>
                                    <a href="{{ url('Massenrempulu')}}">Massenrempulu</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu">
                            <a href="#forms" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <i data-feather="users"></i>
                                    <span>Kader</span>
                                </div>
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                                </div>
                            </a>
                            <ul class="collapse submenu list-unstyled" id="forms" data-bs-parent="#accordionExample">
                                <li>
                                    <a href="{{ url('/data-kader-aman') }}"> Kader AMAN</a>
                                </li>
                            </ul>
                        </li>

                        <li class="menu">
                            <a href="{{ url('/daftar-kegiatan-aman')}}" aria-expanded="false" class="dropdown-toggle">
                                <div class="">
                                    <i data-feather="clipboard"></i>
                                    <span>Kegiatan AMAN</span>
                                </div>
                            </a>
                        </li>
                    @endif

                </ul>
                
            </nav>