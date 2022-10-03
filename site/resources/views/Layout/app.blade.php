<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <title>Afirahi Soft</title>
    @php
    $siteInfo =\App\Models\MoreModel::find(1);
    @endphp
    <link href="http://admin.afirahisoft.xyz/uploads/mores/{{$siteInfo->more_des}}" rel="icon" type="image/png" />
    <meta name="description" content="afirrahi soft " />
    <meta name="keywords" content="Read blog in bangla" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/custom.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
</head>

<body>
    @include('Layout.menu');

    @yield('content')







    <!-- DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE="afirahis_rahiafirahisoft"
DB_USERNAME="afirahis_rajdiprifat2004"
DB_PASSWORD="Rifat123456789@@" -->




    <footer class="footer mt-auto bg-dark py-3 text-white text-center">
        <div class="container">
            <span class="">This site is developed by </span> <a target="_blank" href="http://www.rifatabrarjowad.me"
                style="color:red !important">Rifat Abrar
                Jowad</a>
        </div>
    </footer>

    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/axios.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>


</body>

</html>