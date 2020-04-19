<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('assets/site/images/favicon.png') }}" type="image/png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sahari Subidha @stack('title') </title>
    <link href="{{ asset('assets/site/css/custom.css?v=1.0.3')}}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/owl.carousel.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('assets/site/css/app.css?v=1.0.3')}}" rel="stylesheet">
    <link href="{{ asset('assets/site/css/responsive.css')}}" rel="stylesheet">

    @stack('styles')

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,700,900" rel="stylesheet">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700|Roboto:100i,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@900&display=swap" rel="stylesheet">

    <style>
    .productGrid .image-wrapper img {
        width: 100% !important;
        height: 100% !important;
    }
    </style>
</head>
<body>
    <!-- js -->
    <script src="{{ asset('assets/site/js/jquery.min.js')}}"></script>
    <!-- scrollToTop -->
    <div class="scrollToTop">
        <i class="fa fa-angle-up"></i>
    </div>
    <!--Header Start-->
    <header>
        {{--HEADER--}}
        @include('site::includes.header')
        {{--HEADER END--}}
    </header>
    <!--Header End-->

    <!--Mainbody Start-->
    <div class="mainbody ">
        @yield('content')
    </div>
    <!--Mainbody End-->
    <!--Footer Start-->
    <footer>
        @include('site::includes.footer')
    </footer>
    <!--Footer End-->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/site/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/site/js/script.js')}}"></script>  
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/forms/selects/select2.min.js')}}"></script> 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script type="text/javascript" src="{{asset('assets/custom.js')}}"></script> -->
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
    @stack('scripts')

</body>

</html>