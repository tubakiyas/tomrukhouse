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
                    <h1>İletişim</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Form  -->
<div class="contact-section gray-bg section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="contact-form-wrap">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Adınız" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Soyadınız" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="email" placeholder="Emailiniz" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="phone" placeholder="Telefon Numaranız" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" id="message" placeholder="Mesajınız"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <input type="submit" value="Gönder">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="contact-intro-wrap">
                    <div class="section-title">
                        <h6>İletişim</h6>
                        <div class="heading-animation" style="perspective: 400px;">
                            <h2 style="display: inline-block; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                Hemen Bize <span>Ulaşın</span>
                            </h2>
                        </div>
                    </div>
                    <p>Hayalinizdeki evi gerçeğe dönüştürmek için sizinle nasıl işbirliği yapabileceğimizi lütfen bize bildirin.</p>
                </div>
                <div class="contact-info-wrap">
                    <div class="contact-info-inner mt-60">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-contact-wrap">
                                    <div class="info-icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Telefon</h4>
                                        <p>0542 500 22 18</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-contact-wrap">
                                    <div class="info-icon">
                                        <i class="fa-solid fa-envelope"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Email</h4>
                                        <p>info@tomrukhouse.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-contact-wrap">
                                    <div class="info-icon">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </div>
                                    <div class="info-content">
                                        <h4>Adres</h4>
                                        <p class="mb-10">Gümüşdere Yörük sokak No:14 </p>
                                        <p>Sarıyer, Istanbul, Turkey 34450</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contact-page google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192210.9927231375!2d28.859488227541327!3d41.17169408945536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x409fe02232a852d7%3A0x3a86cad07b1a4ec4!2zU2FyxLF5ZXIvxLBzdGFuYnVs!5e0!3m2!1str!2str!4v1727514154627!5m2!1str!2str"
        width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

@endsection
