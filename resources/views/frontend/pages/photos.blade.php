@extends('frontend.layouts.app')

@section('content')

<!-- Banner -->
<div class="breadcrumb-area">
    <img src="{{ asset('assets/img/tomruk/banner.jpg') }}" alt="tomruk-house" class="breadcrumb-bg">
    <div class="overlay-3"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="breadcrumb-title">
                    <h1>Fotoğraflar</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="project-section project-three section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 text-center">
            <div class="section-title">
                <h2>Size En Uygun Evi Seçin</h2>
            </div>
            <p>Kütük ev, kütük kulübe veya ahşap çerçeve ev inşa etme kararı kolay bir seçimdi.
                Ancak, hangisinin size en uygun olduğunu seçmek biraz daha zaman alabilir.
                Karar vermenize yardımcı olmak için diğer memnun müşterilerimiz için inşa
                ettiğimiz projelere göz atın.</p>
            </div>

        </div>
    </div>
    <div class="button-container">
        <a href="" class="theme-btn">Banyo</a>
        <a href="" class="theme-btn">Mutfak</a>
        <a href="" class="theme-btn">Salon</a>
        <a href="" class="theme-btn">Veranda</a>
        <a href="" class="theme-btn">Yatak Odası</a>
    </div>
    <div class="container mt-40">
        <div class="row gx-4 mt-30">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <a href="{{ route ('allPhotos')}}" class="single-blog-item">
                    <div class="blog-img">
                        <img src="assets/img/tomruk/tomruk.jpg" alt="tomruk-house" title="Tomruk House">
                    </div>
                    <div class="blog-content text-center">
                        <div class="blog-title">
                            <h4>Barker Wildcat Lodge</h4>
                        </div>
                        <span class="link_icon text-wood">Tüm Fotoğraflar<i class="las la-arrow-right"></i></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection
