<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>AMAN SULAWESI SELATAN </title>
    <link rel="icon" type="image/X-icon" href="{{ asset('logo/logo-aman.jpg') }}"/>
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/light/loader.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/dark/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('cork-v3/layouts/vertical-light-menu/loader.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('cork-v3/src/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/light/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/layouts/vertical-light-menu/css/dark/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->


    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('cork-v3/src/assets/css/light/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/assets/css/light/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('cork-v3/src/assets/css/dark/components/list-group.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/assets/css/dark/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/src/table/datatable/datatables.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/light/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/light/table/datatable/custom_dt_miscellaneous.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/dark/table/datatable/dt-global_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/dark/table/datatable/custom_dt_miscellaneous.css') }}">

    <!-- END PAGE LEVEL STYLES -->

    <!-- date time picker -->
    <link href="{{ asset('cork-v3/src/plugins/src/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/plugins/src/noUiSlider/nouislider.min.css') }}" rel="stylesheet" type="text/css">
    <!-- END THEME GLOBAL STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{ asset('cork-v3/src/assets/css/light/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/src/plugins/css/light/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">

    <link href="{{ asset('cork-v3/src/assets/css/dark/scrollspyNav.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/src/plugins/css/dark/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
    <!--  END date time picker  -->

    {{-- icon --}}
    <link rel="stylesheet" href="{{ asset('cork-v3/src/plugins/src/font-icons/fontawesome/css/regular.css') }}">

    <link rel="stylesheet" href="{{ asset('cork-v3/src/plugins/src/font-icons/fontawesome/css/fontawesome.css') }}">

    <link href="{{ asset('cork-v3/src/assets/css/light/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('cork-v3/src/assets/css/dark/components/font-icons.css') }}" rel="stylesheet" type="text/css">
    {{-- end icon --}}


    <!-- lightbox/detail peta -->
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/src/glightbox/glightbox.min.css') }}">
    
    <link href="{{ asset('cork-v3/src/assets/css/light/users/user-profile.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('cork-v3/src/assets/css/dark/users/user-profile.css') }}" rel="stylesheet" type="text/css" />

    
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/light/tomSelect/custom-tomSelect.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('cork-v3/src/plugins/css/dark/tomSelect/custom-tomSelect.css') }}">

    {{-- apexcharts --}}
    <script src="{{ asset('apxcharts/dist/apexcharts.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('apxcharts/dist/apexcharts.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" integrity="sha512-gOQQLjHRpD3/SEOtalVq50iDn4opLVup2TF8c4QPI3/NmUPNZOk2FG0ihi8oCU/qYEsw4P6nuEZT2lAG0UNYaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class=" layout-boxed">
    <!-- BEGIN LOADER -->
    <div id="load_screen"> 
        <div class="loader"> 
            <div class="loader-content">
                <div class="spinner-border text-warning align-self-center  ">Loading...</div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class="header-container container-xxl">

        @include('admin.navbar')

    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container " id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            @include('admin.sidebar')

        </div>
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="middle-content container-xxl p-0">

                    <!--  BEGIN BREADCRUMBS  -->
                    <div class="secondary-nav">
                        <div class="breadcrumbs-container" data-page-heading="Sales">
                            <header class="header navbar navbar-expand-sm">
                                <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                                </a>
                                <div class="d-flex breadcrumb-content">
                                    <div class="page-header">

                                        <div class="page-title">
                                        </div>
                        
                                        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                            </ol>
                                        </nav>
                        
                                    </div>
                                </div>
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->                    

                    <div class="row layout-top-spacing">

                        @yield('content')
    
                    </div>

                </div>

            </div>
            <!--  BEGIN FOOTER  -->

            @include('admin.footer')

            <!--  END CONTENT AREA  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('cork-v3/src/plugins/src/global/vendors.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/mousetrap/mousetrap.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/waves/waves.min.js') }}"></script>
    <script src="{{ asset('cork-v3/layouts/vertical-light-menu/app.js') }}"></script>
    <script src="{{ asset('cork-v3/src/assets/js/custom.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/highlight/highlight.pack.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/datatables.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/jszip.min.js') }}"></script>    
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/button-ext/buttons.print.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/table/datatable/custom_miscellaneous.js') }}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('cork-v3/src/assets/js/dashboard/dash_2.js') }}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    {{-- date time picker --}}
    <script src="{{ asset('cork-v3/src/plugins/src/flatpickr/flatpickr.js') }}"></script>

    <script src="{{ asset('cork-v3/src/plugins/src/flatpickr/custom-flatpickr.js') }}"></script>
    
    {{-- end date time picker --}}

    {{-- icon --}}
    <script src="{{ asset('cork-v3/src/assets/js/scrollspyNav.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/font-icons/feather/feather.min.js') }}"></script>
    <script>
        feather.replace();
    </script>
    {{-- end icon --}}

    <!-- lightbox/detail peta -->
    <script src="{{ asset('cork-v3/src/plugins/src/glightbox/glightbox.min.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/glightbox/custom-glightbox.min.js') }}"></script>


    <script src="https://code.jquery.com/jquery-migrate-3.4.1.min.js" integrity="sha256-UnTxHm+zKuDPLfufgEMnKGXDl6fEIjtM+n1Q6lL73ok=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    @if (session()->has('success'))
    <script>
        swal("Berhasil!","{!!Session::get('success')!!}","success",{
            button:"ok"
        })
    </script>
    @endif

    @if (session()->has('gagal'))
        <script>
            swal("Oopss!","{!!Session::get('gagal')!!}","error",{
                button:"ok"
            })
        </script>
    @endif

    <script>
        $('.show-confirm').click(function(event) {
            // ambil form terdekat dari class confirm-delete
            let form =  $(this).closest("form");
            //nge ran swal dulu
            event.preventDefault();
            swal({
                title: `Apakah Anda Yakin Ingin Menghapus Data Ini ?`,
                text: "Jika anda menghapusnya, akan terhapus selamanya",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                form.submit();
                }
            });
        });
    </script>

    <script src="{{ asset('cork-v3/src/plugins/src/tomSelect/tom-select.base.js') }}"></script>
    <script src="{{ asset('cork-v3/src/plugins/src/tomSelect/custom-tom-select.js') }}"></script>

    

</body>
</html>