<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>e-Kinerja | @if (isset($title))
        {{ $title }}
        @endif
    </title>
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/assets/img/icon.png') }}" />
    <link href="{{ asset('assets/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('assets/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN DATA TABLE -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/table/datatable/datatables.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/table/datatable/dt-global_style.css') }}">
    <!-- END DATA TABLE -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalerts/sweetalert2.min.css') }}">

    <link href="{{ asset('assets/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('assets/plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->
    {{-- <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css"> --}}
    <link href='https://fonts.googleapis.com/css?family=Berkshire+Swash' rel='stylesheet'>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <link href="{{ asset('assets/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/plugins/select2/select2.min.css')}}">

    <link href="{{ asset('assets/assets/css/tables/table-basic.css')}}" rel="stylesheet" type="text/css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <link href="{{ asset('assets/assets/css/components/timeline/custom-timeline.css')}}" rel="stylesheet" type="text/css" />


    <style>
        .layout-px-spacing {
            min-height: calc(100vh - 166px) !important;
        }
    </style>
    <style>
        .hfont {
            font-family: 'Berkshire Swash';
            font-size: 28px;
            font-style: bold;
        }

        .nfont {
            font-family: 'Berkshire Swash';
            font-size: 24px;
            color: #fff;
        }

        .bfont {
            font-family: 'Berkshire Swash';
            font-size: 24px;
            font-style: bold;
        }

        .bgx {
            background-image: url("{{url('assets/assets/img/bgx1.jpg')}}");
            background-size: 350px;
        }

        .ofont {
            color: #EA6838;
        }

        .bgdanger {
            background-color: #E7515A
        }

        .hcolor {
            color: #1B55E2;
        }

        .mcolor {
            font-family: 'Berkshire Swash';
            font-style: bold;
            color: #ffffff;
            background: #3B3F5C;
        }

        .putih {
            color: white;
        }

        .noshadow {
            box-shadow: none;
        }

        .centermodal {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
    </style>

</head>

<body>
    <!-- BEGIN LOADER -->
    {{-- <div id="load_screen"> <div class="loader"> <div class="loader-content">
        <div class="spinner-grow align-self-center"></div>
    </div></div></div> --}}
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm" style="background: #E7515A">

            <ul class="navbar-item theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="index.html">
                        <img src="{{ asset('assets/assets/img/icon.png')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a style="color: #fff; font-family: 'Berkshire Swash'; font-weight: normal;"> e-Kinerja </a>
                </li>
            </ul>

            <ul class="navbar-item flex-row ml-md-auto">
                <li class="nav-item dropdown language-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="language-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; font-size:14px;">
                        @php
                        $idx=Auth::user()->opd_kode;
                        $opd = DB::select("SELECT * FROM opd WHERE kode_opd='$idx'");
                        @endphp
                        <b>{{ strtoupper(Auth::user()->name) }}</b>
                    </a>
                </li>

                <li class="nav-item dropdown user-profile-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        <img src="{{ asset('assets/assets/img/foto.png')}}" alt="avatar">
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="">
                            <div class="dropdown-item">
                                <a class="" href="{{ route('profil') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="12" cy="7" r="4"></circle>
                                    </svg>{{ Auth::user()->name }}</a>
                            </div>
                            {{-- <div class="dropdown-item">
                                <a class="" href="apps_mailbox.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-inbox"><polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline><path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z"></path></svg> Inbox</a>
                            </div>
                            <div class="dropdown-item">
                                <a class="" href="auth_lockscreen.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> Lock Screen</a>
                            </div> --}}
                            <div class="dropdown-item">
                                <a class="" href="{{ route('logout') }}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg> Sign Out</a>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <div class="sub-header-container">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg></a>

            <ul class="navbar-nav flex-row">
                <li>
                    <div class="page-header">
                        <nav class="breadcrumb-one" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0);">{{$menu}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>{{$title}}</span></li>
                            </ol>
                        </nav>

                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            @include('template.sidebar')

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content bgx">
            <div class="layout-px-spacing">

                @yield('konten')

            </div>
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2022 <a target="_blank" href="#">Dinas Komunikasi dan Informatika</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <div class="modal fade" id="modalHapus" data-backdrop="static">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body" style="border-radius: 30px">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <br>
                    <center>
                        <img src="{{ asset('assets/assets/img/hapus.png') }}" width="30%">
                        <br>
                        <br>
                        <br>
                        <h3 class="hfont">Apakah Anda Yakin?</h3>
                        <h5 class="ofont">Data yang terhapus tidak bisa dikembalikan</h5>

                        <br>
                        <button class="btn btn-info" data-dismiss="modal" aria-label="Close">Batal</button>
                        <a class="btn btn-danger" id="hapus2" href="">Ya, hapus !</a>

                    </center>

                </div>
            </div>
        </div>
    </div>

    @yield('modal')
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('assets/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <script src="{{ asset('assets/plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalerts/sweetalert2.min.js') }}"></script>

    <!--  BEGIN CUSTOM SELECT2  -->
    <script src="{{ asset('assets/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{ asset('assets/plugins/select2/select2.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/select2/custom-select2.js')}}"></script>
    <!--  BEGIN CUSTOM SELECT2  -->

    <script src="{{ asset('assets/plugins/flatpickr/flatpickr.js')}}"></script>
    <script src="{{ asset('assets/plugins/flatpickr/custom-flatpickr.js')}}"></script>
    {{-- <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/js/bootstrap-datetimepicker.min.js"></script> --}}


    @if($x = Session::get('success'))
    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            })
            Toast.fire({
                type: 'success',
                title: '{{ $x }}'
            })
        })
    </script>
    @elseif($x = Session::get('error'))
    <script type="text/javascript">
        $(function() {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000
            })
            Toast.fire({
                type: 'error',
                title: '{{ $x }}'
            })
        })
    </script>
    @endif


    <script>
        var ss = $(".select2").select2({
            tags: true,
        });
    </script>

    <!-- BEGIN PAGE DATATABLE -->
    <script src="{{ asset('assets/plugins/table/datatable/datatables.js') }}"></script>
    <script>
        $('#zero-config').DataTable({
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [10, 20, 30, 50],
            "stateSave": true,
            "pageLength": 10
        });
    </script>
    <!-- END PAGE DATATABLE -->

    @yield('js')


</body>

</html>