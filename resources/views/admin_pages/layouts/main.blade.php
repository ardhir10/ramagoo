<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{config('app.sub_name')}} | {{$page_title}} </title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets_admin')}}/assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{asset('assets_admin')}}/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets_admin')}}/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('assets_admin')}}/plugins/font-icons/fontawesome/css/regular.css">
    <link rel="stylesheet" href="{{asset('assets_admin')}}/plugins/font-icons/fontawesome/css/fontawesome.css">
    <link href="{{asset('assets_admin')}}/assets/css/elements/breadcrumb.css" rel="stylesheet" type="text/css" />
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    @stack('css')
    <style>
        /*
            The below code is for DEMO purpose --- Use it if you are using this demo otherwise Remove it
        */
        .page-title {
            float: none;
            margin-top: 0;
            margin-bottom: 0;
            align-self: center;
            padding-right: 15px;
            border-right: 1px solid #bfc9d4;
            margin-right: 15px;
        }
        .page-title h3 {
            margin-bottom: 0;
        }
        .page-header {
            display: flex;
            padding: 0;
            margin-bottom: 16px;
            margin-top: 30px
        }
        .breadcrumb-one {
            display: inline-block;
            align-self: center;
        }
        .breadcrumb-one .breadcrumb {
            padding: 0;
            vertical-align: text-bottom;
            margin-bottom: 0;
            background: transparent;
        }
        .breadcrumb-one .breadcrumb-item {
            align-self: center;
        }
        .breadcrumb-one .breadcrumb-item a {
            color: #888ea8;
            vertical-align: text-bottom;
        }
        .breadcrumb-one .breadcrumb-item a svg {
            width: 20px;
            height: 20px;
            vertical-align: sub;
        }
        .breadcrumb-one .breadcrumb-item.active a {
            color: #1b55e2;
        }
        .breadcrumb-one .breadcrumb-item span {
            vertical-align: text-bottom;
        }
        .breadcrumb-one .breadcrumb-item.active {
            color: #1b55e2;
            font-weight: 600;
        }
        .breadcrumb-one .breadcrumb-item+.breadcrumb-item {
            padding: 0px;
        }
        .breadcrumb-one .breadcrumb-item+.breadcrumb-item::before {
            color: #515365;
            font-size: 0;
            content: url('data:image/svg+xml, <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 24 24" fill="none" stroke="%23555" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>');
            vertical-align: text-top;
            padding: 0 6px;
        }


        @media(max-width: 575px) {
            .page-header {
                display: block;
            }
            .page-title {
                margin-bottom: 20px;
                border: none;
                padding-right: 0;
                margin-right: 0;
            }
        }


      

    </style>
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

</head>
<body class="alt-menu sidebar-noneoverflow">

    <!--  BEGIN NAVBAR  -->
    @include('admin_pages.layouts.navbar')
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container sidebar-closed sbar-open" id="container">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('admin_pages.layouts.sidebar')
        
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">
                <div class="page-header">
                    <div class="page-title">
                        <h3> {{$page_title}}</h3>
                    </div>
                   
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                         {{ Breadcrumbs::render($breadcrumbs) }}
                        {{-- <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                            <li class="breadcrumb-item"><a href="javascript:void(0);">Starter Kits</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Breadcrumb</span></li>
                        </ol> --}}
                    </nav>

                </div>

                @yield('content')
                
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('assets_admin')}}/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="{{asset('assets_admin')}}/bootstrap/js/popper.min.js"></script>
    <script src="{{asset('assets_admin')}}/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{asset('assets_admin')}}/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="{{asset('assets_admin')}}/assets/js/app.js"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('assets_admin')}}/assets/js/custom.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @stack('js')
    <script src="{{ mix('js/sweetalert.js') }}"></script>
      
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
</body>

<!-- Mirrored from designreset.com/cork/ltr/demo2/starter_kit_breadcrumb.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 05 Feb 2020 08:29:13 GMT -->
</html>