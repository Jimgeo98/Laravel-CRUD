<!DOCTYPE html>

<html lang="en">

<head>
    {{-- meta tags --}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Laravel CRUD application">
    <meta name="keywords" content="Laravel, PHP">
    <meta name="author" content="Dimitris Georgiadis">

    <title>CRUD</title>

    {{-- moment js time --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment-with-locales.min.js"></script>

    {{-- bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- fonts --}}

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">

    {{-- animate css --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    {{-- CSS styles --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
</head>

<body>
    
    <header class="header">
        <h1 class="animate__animated animate__fadeInTopRight">Laravel 8 CRUD Application</h1>
        <h5 id="time" class="animate__animated animate__fadeInTopLeft"></h5>
    </header>
  
    <div class="container">
        @yield('content')
    </div>

    <footer class="footer">
        <p class="animate__animated animate__heartBeat">Copyright &copy; 2021 by Dimitris Georgiadis.</p>
    </footer>

    <script src="{{ asset('js/time.js') }}"></script>
    <script src="{{ asset('js/hello.js') }}"></script>
</body>

</html>
