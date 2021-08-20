@extends('layout.app')

@section('content')
<div class="container">
    
    {{-- Image --}}
    <div class="hero_image" data-aos="fade-up" data-aos-duration="900">
        <div class="image" style="background-image: url('{{ $user['image']}}')"></div>
    </div>
    <div class="information" data-aos="slide-left" data-aos-duration="900">
        <h1 class="headline">{{ $user['title']}}</h1>
        <h3 class="subHeadline">{{$user['tagline']}}</h3>
        <p class="description">{{$user['content']}}</p>
        <a href="tel:{{ $user['phone']}}" class="action_button">
            <span><i class="fa fa-phone"></i></span> 
            {{ $user['phone']}}
        </a>
        <a href="mailto:{{ $user['email']}}" class="action_button">
           <span><i class="fa fa-envelope"></i></span> {{ $user['email']}}
        </a>
    </div>
    </div>

    <p>type "--help" and press "Enter" in the Terminal Below!: </p>
    <div id="terminalContainer" style="max-width: 600px;  margin: 0 auto; ">
        <div class="topBar">
            <div class="closeBtn terminalBtn"></div>
            <div class="minimizeBtn terminalBtn"></div>
            <div class="expandBtn terminalBtn"></div>
        </div>
         <div id="terminal"></div>
     </div>

</div>
@endsection
