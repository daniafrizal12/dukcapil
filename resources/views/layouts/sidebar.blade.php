<nav id="sidebar">
    <div class="shadow-bottom"></div>
    <ul class="list-unstyled menu-categories" id="accordionExample">
        <li class="menu">
            <a href="{{ route('dashboard') }}" class="dropdown-toggle" data-active="{{set_true('dashboard')}}">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                    </svg>
                    <span>Dashboard</span>
                </div>
            </a>
        </li>

        {{-- <li class="menu">
            <a href="#program" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-active="{{set_true(['dashboard'])}}">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-codesandbox">
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                <polyline points="7.5 4.21 12 6.81 16.5 4.21"></polyline>
                <polyline points="7.5 19.79 7.5 14.6 3 12"></polyline>
                <polyline points="21 12 16.5 14.6 16.5 19.79"></polyline>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg>
            <span>Program</span>
        </div>
        <div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </div>
        </a>
        <ul class="collapse submenu list-unstyled {{set_show([''])}}" id="program" data-parent="#accordionExample">
            <li class="{{set_active(['dashboard'])}}">
                <a href="{{ route('dashboard') }}"> Data Program </a>
            </li>
        </ul>
        </li> --}}
        @if (Auth::user()->level == 'admin')
        <li class="menu">
            <a href="{{ route('pegawai') }}" data-active="{{set_true(['pegawai'])}}" aria-expanded="{{set_true(['pegawai'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>Pegawai</span>
                </div>
            </a>
        </li>
        <li class="menu">
            <a href="#program" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle" data-active="{{set_true(['userNakeg','userKabid'])}}">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>Users</span>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                        <polyline points="9 18 15 12 9 6"></polyline>
                    </svg>
                </div>
            </a>
            <ul class="collapse submenu list-unstyled {{set_show(['userNakeg','userKabid'])}}" id="program" data-parent="#accordionExample">
                <li class="{{set_active(['userNakeg'])}}">
                    <a href="{{ route('userNakeg') }}"> Tenaga Kegiatan </a>
                </li>
                <li class="{{set_active(['userKabid'])}}">
                    <a href="{{ route('userKabid') }}"> Kepala Bidang </a>
                </li>
            </ul>
        </li>
        </li>

        <li class="menu">
            <a href="{{ route('bidang') }}" data-active="{{set_true(['bidang'])}}" aria-expanded="{{set_true(['bidang'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hard-drive">
                        <line x1="22" y1="12" x2="2" y2="12"></line>
                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                        <line x1="6" y1="16" x2="6.01" y2="16"></line>
                        <line x1="10" y1="16" x2="10.01" y2="16"></line>
                    </svg>
                    <span>Bidang</span>
                </div>
            </a>
        </li>
        @endif
        {{-- <li class="menu">
            <a href="{{ route('atasBeban') }}" data-active="{{set_true(['atasBeban'])}}" aria-expanded="{{set_true(['atasBeban'])}}" class="dropdown-toggle">
        <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-package">
                <line x1="16.5" y1="9.4" x2="7.5" y2="4.21"></line>
                <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                <polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline>
                <line x1="12" y1="22.08" x2="12" y2="12"></line>
            </svg>
            <span>Atas Beban</span>
        </div>
        </a>
        </li> --}}
        <li class="menu">
            <a href="{{ route('kinerja') }}" data-active="{{set_true(['kinerja','kinerja.add','kinerja.edit','kinerjaByBulan','kinerjaByTanggal'])}}" aria-expanded="{{set_true(['kinerja','kinerja.add','kinerja.edit','kinerjaByBulan','kinerjaByTanggal'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-target">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="6"></circle>
                        <circle cx="12" cy="12" r="2"></circle>
                    </svg>
                    <span>E-Kinerja</span>
                </div>
            </a>
        </li>
        @if (Auth::user()->level == 'user' || Auth::user()->level == 'kabid')
        <li class="menu">
            <a href="{{ route('userNakeg') }}" data-active="{{set_true(['userNakeg'])}}" aria-expanded="{{set_true(['userNakeg'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>Tenaga Kegiatan</span>
                </div>
            </a>
        </li>
        <li class="menu">
            <a href="{{ route('userKabid') }}" data-active="{{set_true(['userKabid'])}}" aria-expanded="{{set_true(['kabid'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    <span>Kabid</span>
                </div>
            </a>
        </li>
        <li class="menu">
            <a href="{{ route('bidang') }}" data-active="{{set_true(['bidang'])}}" aria-expanded="{{set_true(['bidang'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hard-drive">
                        <line x1="22" y1="12" x2="2" y2="12"></line>
                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path>
                        <line x1="6" y1="16" x2="6.01" y2="16"></line>
                        <line x1="10" y1="16" x2="10.01" y2="16"></line>
                    </svg>
                    <span>Bidang</span>
                </div>
            </a>
        </li>
        @endif
        @if (Auth::user()->level == 'user')
        <li class="menu">
            <a href="{{ route('user.laporan') }}" data-active="{{set_true(['user.laporan','cetakBulanan'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                    <span>Laporan</span>
                </div>
            </a>
        </li>
        @else
        <li class="menu">
            <a href="{{ route('laporanByUser') }}" data-active="{{set_true(['laporanByUser','cetakBulanan','laporanBulanan'])}}" class="dropdown-toggle">
                <div class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer">
                        <polyline points="6 9 6 2 18 2 18 9"></polyline>
                        <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
                        <rect x="6" y="14" width="12" height="8"></rect>
                    </svg>
                    <span>Laporan</span>
                </div>
            </a>
        </li>
        @endif

    </ul>
</nav>