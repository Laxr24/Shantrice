<!DOCTYPE html>
<html lang="en">
<head>
    {{-- MEta tags --}}
    <meta charset="UTF-8">
    @if ($config['search-engine-index'] != 'false')
         <meta name="robots" content="all">
    @endif
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="{{$config['meta-title']}}" content="{{ $config['meta-description']}}" />
    <meta name="robots" content="max-snippet:120">




    {{-- Site title --}}
    <title>{{ $config['site-name'] }}|{{ $config['site-title'] }}</title>

    {{-- Favicon Link --}}
    <link rel="shortcut icon" href="{{$config['favicon-url']}}" type="image/x-icon">
    
    
    



    {{-- Imports --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.createjs.com/1.0.0/preloadjs.min.js"></script>
    
    
    {{-- Chat API --}}
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="500abc67-87ff-48b0-ba79-9f61d499df07";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    
    {{-- Cutoms --}}
    <link rel="stylesheet" href="{{ asset('admin/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('admin/css/trm-style.css')}}">
    

</head>
<body>
    @yield('content')

    <script src="{{asset('admin/js/trmjs.io.js')}}"></script>
    <script src="{{asset('admin/js/main.js')}}"></script>
</body>
</html>