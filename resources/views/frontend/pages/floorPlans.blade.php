@extends('frontend.layouts.app')

@section('content')

<style>
    .icoon{
        position: relative;
        display: inline-block;
        vertical-align: middle;
        overflow: hidden;
        font-size: 24px;
        line-height: 34px;
        text-align: center;
    }
</style>

<!-- Banner -->
<div class="breadcrumb-area">
    <img src="{{ asset('assets/img/tomruk/banner.jpg') }}" alt="tomruk-house" class="breadcrumb-bg">
    <div class="overlay-3"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="breadcrumb-title">
                    <h1>Kat Planlarımız</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feature-area section-padding pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <img src="assets/img/feature/1.png" alt="tomruk-house" title="Tomruk House">
                        </div>
                        <div class="feature-content">
                            <h5>Deneyim</h5>
                            <p>Uzun yıllar boyunca edindiğimiz tecrübe ile sektörde güven inşa ettik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <img src="assets/img/feature/2.png" alt="tomruk-house" title="Tomruk House">
                        </div>
                        <div class="feature-content">
                            <h5>Kalite</h5>
                            <p>Her projemizde dayanıklı malzemeler ve yüksek standartlar önceliğimizdir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                    <div class="single-feature-item">
                        <div class="feature-icon">
                            <img src="assets/img/feature/3.png" alt="tomruk-house" title="Tomruk House">
                        </div>
                        <div class="feature-content">
                            <h5>Yenilikçi Tasarımlar</h5>
                            <p>Çağdaş çizgilerle tasarladığımız yaşam alanları, fonksiyonellik sunar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

<div class="banner-section">
    <div class="banner-bg" data-background="{{ asset('assets/img/tomruk/cumberland.jpg') }}" style="background-image: url(&quot;assets/img/banner.jpg&quot;);"></div>
    <div class="banner-content-wrap">
        <h2 class="text-white mb-20 one-title">Ayın Planı: Cumberland</h2>
        <p>Cumberland, geleneksel bir kütük ev görünümünü köpek kulübesi
            pencereleri ve düz bir çatı hattıyla birleştirip, çok tercih
            edilen modern bir düzenle harmanlar. Ekli garaj, geniş bir
            çamaşır/temizlik odası aracılığıyla eve bağlanır. Merkezde
            yer alan mutfaktan, evin içi ve dış mekan yaşam alanları
            arasında sorunsuz bir geçiş sağlayacak şekilde düzenlenmiştir.
             Alanın verimli kullanımıyla eğlence için mükemmel bir akış sunar.
              Kapalı teras, uzun bir günün ardından şömine önünde dinlenmek ve
              rahatlamak için ideal bir ortam sağlar. Ana katta ayrıca geniş bir
               ana suit, büyük bir banyo ve yürüyüş dolaplı bir giyinme odası yer alır.</p>
        <a href="{{ route ('floor.detail') }}" class="white-btn mt-20">Detay</a>
    </div>
</div>

<div class="project-section section-padding pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-10 col-lg-6 col-md-8">
                <div class="section-title">
                    <div class="heading-animation" style="perspective: 400px;">
                        <h2><div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 163.05px 29px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Hayalinizdeki</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 144.844px 29px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Bungalovun</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 41.0812px 29px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Kat</div> <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: 90.675px 29px; transform: translate3d(0px, 0px, 0px); opacity: 1;">Planları</div></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <a href="{{ route ('floor.detail')}}" class="single-project-item">
                    <div class="project-img">
                        <img class="service-img" src="{{ asset ('/assets/img/tomruk/floor1.jpg') }}" alt="tomruk-house" title="Tomruk House">
                    </div>
                    <div class="project-content">
                        <h5 class="one-title">Riverbend</h5>
                        <p class="one-title">3,304 square feet, 2 stories, 4.. </p>
                        <span class="link_icon">
                            <i class="las la-arrow-right icoon"></i>
                        </span>
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <a href="{{ route ('floor.detail')}}" class="single-project-item">
                    <div class="project-img">
                        <img class="service-img" src="{{ asset ('/assets/img/tomruk/floor2.jpg') }}" alt="tomruk-house" title="Tomruk House">
                    </div>
                    <div class="project-content">
                        <h5 class="one-title">Prestwick</h5>
                        <p class="one-title">3,304 square feet, 2 stories, 4.. </p>
                        <span class="link_icon">
                            <i class="las la-arrow-right icoon"></i>
                        </span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
