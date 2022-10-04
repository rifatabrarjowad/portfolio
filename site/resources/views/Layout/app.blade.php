<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <title>Afirahi Soft</title>

    <link href="http://admin.afirahisoft.xyz/uploads/mores/" rel="icon" type="image/png" />
    <meta name="description" content="afirrahi soft " />
    <meta name="keywords" content="Read blog in bangla" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>

<body>
    @include('Layout.menu');

    @yield('content')


    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>


</body>

</html>