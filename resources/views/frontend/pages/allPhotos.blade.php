@extends('frontend.layouts.app')

@section('content')
<style>
    .photo{
        width: 100%;
        height: 500px;
        object-fit: cover;
    }
</style>

<!-- Banner -->
<div class="breadcrumb-area">
    <img src="{{ asset('assets/img/tomruk/banner.jpg') }}" alt="tomruk-house" class="breadcrumb-bg">
    <div class="overlay-3"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="breadcrumb-title">
                    <h1>Barker Wildcat Lodge</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <ul class="breadcrumb-list">
            <li><a href="{{ route ('index')}}">Anasayfa</a></li>
            <li><i class="las la-angle-right"></i></li>
            <li><a href="{{ route ('photos')}}">Fotoğraflar</a></li>
            <li><i class="las la-angle-right"></i></li>
            <li><a href="#">Barker Wildcat Lodge</a></li>
        </ul>
    </div>
</div>



<div class="project-section project-three section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
            <div class="section-title">
                <h2>Barker Wildcat Lodge</h2>
            </div>
            <p>
            Wildcat Lodge, dinlenme amacıyla tasarlanmış özel bir kütük yapıdır.
            4,700 metrekarelik bir yaşam alanına ve büyük dış mekanları keyifle
            kullanabilmeniz için 2,000 metrekareden fazla kapalı teras ve patioya
             sahiptir.</p>
            </div>

        </div>
    </div>
    <div class="container mt-40">
        <div class="row gx-4 mt-30">
            <div class="col-xl-6 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <img class="photo" src="{{ asset ('assets/img/tomruk/tomruk.jpg') }}" alt="tomruk-house" title="Tomruk House">
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <img class="photo" src="{{ asset ('assets/img/tomruk/tomruk.jpg') }}" alt="tomruk-house" title="Tomruk House">
            </div>
        </div>
    </div>
</div>

@endsection
