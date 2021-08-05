@extends('layout.app')

@section('content')
<div class="container">
    
    {{-- Image --}}
    <div class="hero_image" data-aos="fade-up" data-aos-duration="900">
        <div class="image" style="background-image: url('{{ asset('admin/assets/shaan.jpg')}}')"></div>
    </div>
    <div class="information" data-aos="slide-left" data-aos-duration="900">
        <h1 class="headline">K.M. Shantonu</h1>
        <h3 class="subHeadline">" Designer & Developer "</h3>
        <p class="description">Shaan is a professional Designer and Developer with over 5 years of experiece. He make some really cool websites and mobile apps using native codes. His journey to design and development is not a smooth curved path.
        </p>
        <a href="tel: +8801772258677" class="action_button">
            <span><i class="fa fa-phone"></i></span> +88 01772258677
        </a>
        <a href="mailto: reach@shantrice.com" class="action_button">
           <span><i class="fa fa-envelope"></i></span> reach@shantrice.com
        </a>
    </div>
    </div>

</div>
@endsection
