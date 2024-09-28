@extends('frontend.layouts.app')

@section('content')



<div class="breadcrumb-area">
    <img src="{{ asset('assets/img/tomruk/banner.jpg') }}" alt="tomruk-house" class="breadcrumb-bg">
    <div class="overlay-3"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="breadcrumb-title">
                    <h1>Hakkımızda</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- About Section -->
<div id="about-3" class="about-section section-padding pt-70">
    <div class="container">
        <div class="row gx-lg-5">
            <div class="col-xl-6 col-lg-6 d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                <div class="about-img-wrap">
                    <img src="{{ asset ('assets/img/tomruk/about.jpg') }}" alt="tomruk-house" title="Tomruk House">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-content-wrap">
                    <div class="section-title">
                        <h6>Hakkımızda</h6>
                        <div class="heading-animation">
                            <h2><span>StoneMill'e </span> Hoş Geldiniz.</h2>
                        </div>
                    </div>
                    <p>StoneMill Log & Timber Homes, 1974'ten beri aile tarafından işletilen bir şirket olarak, nesiller boyu sürecek evler inşa ediyor. Knoxville, TN'deki merkezimizde, Appalachian atalarımız tarafından geliştirilen ve zamana karşı dayanıklılığını kanıtlamış inşaat tekniklerini kullanıyoruz. Sektörde 150 yılı aşkın birleşik deneyime sahip ekibimiz, konseptten tamamlanmaya kadar her aşamada size yardımcı olmaya hazır. Bu sitedeki fotoğraflarımıza ve kat planlarımıza göz atın, ardından kütük ev veya ahşap çerçeveli ev hayalinizi gerçeğe dönüştürmeye başlamak için bizimle online, telefonla veya şahsen iletişime geçin.</p>
                    <div class="about-list-item">
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i>Uzman Ekip </li>
                            <li><i class="fa-solid fa-circle-check"></i>Güvenilir Firma </li>
                            <li><i class="fa-solid fa-circle-check"></i>En Kaliteli Malzemeler</li>
                            <li><i class="fa-solid fa-circle-check"></i>Uygun Fiyatlar</li>
                        </ul>
                    </div>
                    <a href="{{ route ('about') }}" class="theme-btn mt-20">Daha Fazla</a>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="team-section gray-bg section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 text-center">
                    <div class="section-title">
                        <h6>Ekibimiz</h6>
                        <div class="heading-animation" style="perspective: 400px;">
                            <h2 style="display: inline-block; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                Profesyonel Ekibimiz
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-40">
                <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                    <div class="single-blog-item">
                        <div class="blog-img">
                            <img src="{{ asset ('assets/img/tomruk/team-1.jpg') }}" alt="tomruk-house" title="Tomruk House">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span>Marangoz</span>
                            </div>
                            <div class="blog-title">
                                <h4>Berkay Kaya</h4>
                            </div>
                            <p>Berkay, 2022 yılında StoneMill'e katıldı ve 20 yılı aşkın bir deneyimi yanında getirdi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
@endsection
