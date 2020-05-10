<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon-->
    <link rel="shortcut icon" href="images/favicon.html">
    <!-- Site Title-->
    <title>Munfarid - A HTML Template For Blog & Shop </title>
    <!-- Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">
   
   
    {{-- <!-- Fonts for icons-->
    <link href="{{url('assets_client/css/all-fontawesome.min.css')}}" rel="stylesheet">
    <!-- bootstrap-->
    <link href="{{url('assets_client/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Plugins CSS-->
    <link href="{{url('assets_client/css/plugins/slick.min.css')}}" rel="stylesheet">
    <link href="{{url('assets_client/css/plugins/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{url('assets_client/css/plugins/spacing-and-height.css')}}" rel="stylesheet">
    <!-- Style CSS-->
    <link href="{{url('assets_client/css/theme-modules.css')}}" rel="stylesheet"> --}}
    <link href="{{url('assets_client/css/all.css')}}" rel="stylesheet"> 
</head>

<body>
    <!-- Navbar-->
    @include('client_pages.layouts.navbar')
    <!-- End Navbar-->

    <!-- CONTENT -->
    @yield('content')
    <!-- END CONTENT -->
    



    <!-- Subscribe Box        -->
    <div class="container mb-80px">
        <div class="row bg-img-3 px-40px py-60px">
            <div class="col-md-6">
                <h3 class="mb-10px">Subscribe and Stay Informed</h3>
                <p>Oratio pertinax cu vix, id his aliquam habemus tractatos. Eu vis cursus modo officiis liberavisse id
                    invidunt adipiscing cursus has.</p>
                <div class="form-group form-row mb-0">
                    <div class="input-group mb-3">
                        <input class="form-control validate-required validate-email" type="email" name="email"
                            placeholder="Your email">
                        <div class="input-group-append">
                            <button class="btn box-shadow-none" type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer-->
    @include('client_pages.layouts.footer')
    


    <!-- End Footer-->
    <!-- javascript files-->
    <script type="text/javascript" src="{{url('assets_client/')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/jquery.countdown.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/jquery.countTo.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/onepage.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/slick.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/instafeed.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/plugins/contact-us.min.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/main.js"></script>
    <script type="text/javascript" src="{{url('assets_client/')}}/js/main.bundle.js"></script>
    {{-- <script type="text/javascript" src="{{url('assets_client/js/all.js')}}"></script>  --}}

     @stack('js')
</html>
