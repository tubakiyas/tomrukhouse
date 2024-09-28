@extends('frontend.layouts.app')

@section('content')

<style>
    .blog-img iframe {
    width: 385px;
    height: 250px;
    object-fit: cover;
}
.mt{
        margin-top: -10px;
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
                    <h1>Videolar</h1>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="blog-section section-padding  pb-90">
    <div class="container">
        <div class="row gx-4">
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <a href="#">
                <div class="blog-img" style="position: relative;">
                    <iframe
                        src="https://www.youtube.com/embed/ENSjcy3eh8U"
                        frameborder="0"
                        allowfullscreen
                        style="display: block; margin: 0 auto;">
                    </iframe>
                </div>
                <div class="blog-content text-center mt">
                    <div class="blog-title">
                        <h4>Tip Tuesday</h4>
                    </div>
                    <a href="{{ route ('allVideos')}}" class="theme-btn d-block" style="margin: 10px;">Tüm Videoları</a>
                </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <a href="#">
                <div class="blog-img" style="position: relative;">
                    <iframe
                        src="https://www.youtube.com/embed/ENSjcy3eh8U"
                        frameborder="0"
                        allowfullscreen
                        style="display: block; margin: 0 auto;">
                    </iframe>
                </div>
                <div class="blog-content text-center mt">
                    <div class="blog-title">
                        <h4>Tip Tuesday</h4>
                    </div>
                    <a href="{{ route ('allVideos')}}" class="theme-btn d-block" style="margin: 10px;">Tüm Videoları</a>
                </div>
            </a>
        </div>


        </div>
        <div class="row">
            <ul class="pagination d-flex justify-content-center">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item" aria-current="page"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#"><i class="las la-angle-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>

@endsection
