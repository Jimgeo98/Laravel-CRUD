<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="keywords" content="HTML, CSS, JavaScript">
    <meta name="author" content="John Doe">
    <title>Jim Geo</title>

    {{-- moment js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.28.0/moment-with-locales.min.js"></script>

    {{-- google fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    {{-- font awesone icons --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="{{ asset('css/global.css') }}" >
    
</head>
<body>
    <div class="welcome">

        <h3 id="time" class="welctime"></h3>

        <h1><span>Project</span> by Dimitris Georgiadis</h1>

        <a class="btn btn-info" href="/blogs"><i class="fas fa-arrow-circle-right"></i> click here to post</a>

    </div>

    <script src="{{ asset('js/time.js') }}"></script>
    <script src="{{ asset('js/hello.js') }}"></script>
</body>
</html>