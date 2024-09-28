@extends('frontend.layouts.app')

@section('content')
<style>
    .about-list-item ul {
        list-style-type: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }

    .about-list-item li {
        display: flex !important;
        width: 100% !important;
        align-items: center !important;
        margin-bottom: 10px !important;
    }

    .about-list-item i {
        margin-right: 10px !important;
    }
    .plan-img{
        height: 450px;
        width: 100%;
        object-fit: cover;
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
                    <h1>Kat Plan Detay</h1>
                </div>
            </div>
        </div>
    </div>
        <div class="container">
            <ul class="breadcrumb-list">
                <li><a href="{{ route ('index')}}">Anasayfa</a></li>
                <li><i class="las la-angle-right"></i></li>
                <li><a href="{{ route ('floor.plans')}}">Kat Planları</a></li>
                <li><i class="las la-angle-right"></i></li>
                <li><a href="#">Kat Plan Detay</a></li>
            </ul>
        </div>

</div>

<!-- About Section -->
<div id="about-3" class="about-section section-padding pt-70">
    <div class="container">
        <div class="row gx-lg-5 align-items-center">
            <div class="col-xl-6 col-lg-6 d-flex align-items-center wow fadeInUp" data-wow-delay=".2s">
                <div class="about-img">
                    <img src="{{ asset ('assets/img/tomruk/floorr.jpg') }}" alt="tomruk-house" title="Tomruk House">
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-content-wrap">
                    <div class="section-title">
                        <div class="heading-animation">
                            <h2>Riverbend</h2>
                        </div>
                    </div>
                    <p>
                        Riverbend, geniş ve modern tasarımıyla aile yaşamı ve misafir ağırlama için idealdir. Birleştirilmiş oturma ve yemek alanı, bir tarafı özel bir ofise bakan çift yönlü bir şömineye sahiptir. Büyük bir mutfak, kahvaltı alanı, çamaşır odası ve geniş bir yürüyüş dolabına sahip ana suit, alt katı tamamlar.</p>
                    <div class="about-list-item">
                        <ul>
                            <li><i class="fa-solid fa-circle-check"></i>3,304 metrekare</li>
                            <li><i class="fa-solid fa-circle-check"></i>2 kat</li>
                            <li><i class="fa-solid fa-circle-check"></i>4 yatak odası</li>
                            <li><i class="fa-solid fa-circle-check"></i>3.5 banyo</li>
                            <li><i class="fa-solid fa-circle-check"></i>Ana kat: 1,746 metrekare, 1 yatak odası, 1.5 banyo</li>
                            <li><i class="fa-solid fa-circle-check"></i>İkinci kat: 1,558 metrekare, 3 yatak odası, 2 banyo</li>
                        </ul>
                    </div>
                    <a href="#" class="theme-btn mt-20">360º sanal tur için buraya tıklayın</a>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="skill-section gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <img class="plan-img" src="{{ asset('assets/img/tomruk/floorplan.jpg') }}" alt="tomruk-house" title="Tomruk House">
            </div>
            <div class="col-6">
                <img class="plan-img" src="{{ asset('assets/img/tomruk/floorplan.jpg') }}" alt="tomruk-house" title="Tomruk House">
            </div>
        </div>
    </div>
</div>

<div class="banner-section">
    <div class="banner-bg" data-background="/assets/img/tomruk/cumberland.jpg" style="width: 35%;"></div>
    <div class="banner-content-wrap" style="width: 65%;">
        <h1 class="text-white mb-20">StoneMill Kütük ve Kereste Evleri Tasarım Rehberi</h1>
        <p>Herhangi bir ev inşa etmiyoruz. Biz, geleneksel el işçiliğiyle yapılmış,
            üst üste yerleştirilmiş düz kütük evler ve kulübeler ile otantik el ile
            çakılmış ahşap çerçeveli evler konusunda uzmanız. Ustalarımız, Doğu
            Tennessee'nin Appalachian bölgesinde neredeyse iki yüz yıldır ayakta
            kalan yapılar gibi, zamanın testine dayanacak mekanlar oluşturmak için
             özenle çalışmaktadır. Bizimle inşa eden insanlar, sadece hafta sonu,
             yaz veya dört mevsim geçirmek için bir yer değil, özel bir şey istemektedir.

            Seçebileceğiniz 40'tan fazla kat planı ile, özel planınızı oluşturmak
            için doğru tasarımı veya ilhamı bulacağınızdan eminiz. Bugün ücretsiz
            bilgi talep edin ve nerede yaşadığınıza aşık olmaya hazırlanın!</p>
        <a href="#" class="white-btn mt-20">Elektronik Versiyon İndir</a>
        <a href="#" class="white-btn mt-20 ml-20">Basılı Versiyon Talep Edin</a>
    </div>
</div>

@endsection
