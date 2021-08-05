<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <link rel="shortcut icon" href="favicon.gif" type="image/x-icon">
    
    {{-- Imports --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.createjs.com/1.0.0/preloadjs.min.js"></script>
    

    {{-- Chat API --}}
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="500abc67-87ff-48b0-ba79-9f61d499df07";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>

    {{-- Cutoms --}}
    <link rel="stylesheet" href="{{ asset('admin/css/app.css')}}">

</head>
<body>
    @yield('content')

    <script src="{{asset('admin/js/main.js')}}"></script>
</body>
</html>