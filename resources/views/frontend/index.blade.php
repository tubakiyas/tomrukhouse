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
    .photos{
        height: 300px;
        width: 500px;
        object-fit: cover;
    }
</style>


<!-- Hero Area -->
<div id="home-3" class="homepage-slides owl-carousel">
    <div class="single-slide-item d-flex align-items-center" data-background="{{ asset ('assets/img/tomruk/bungo.jpg') }}">
        <div class="overlay-5"></div>
        <div class="hero-area-content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 wow fadeInUp animated" data-wow-delay=".2s">
                        <div class="section-title">
                            <h6 class="text-center">Tomruk House</h6>
                            <h1 class="text-white text-center">Hayallerinizi Tasarlayın, Biz <span style="font-weight:300;">Sıcak Yuvanıza </span> Dönüştürelim!</h1>
                        </div>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ route ('floor.plans')}}" class="theme-btn mt-40">Daha Fazla</a>
                            <a href="{{ route ('contact')}}" class="theme-btn mt-40 ml-20">İletişim</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-slide-item d-flex align-items-center" data-background="{{ asset ('assets/img/tomruk/bungo.jpg') }}">
        <div class="overlay-5"></div>
        <div class="hero-area-content">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-8 col-md-8 wow fadeInUp animated" data-wow-delay=".2s">
                        <div class="section-title">
                            <h6 class="text-center">Tomruk House</h6>
                            <h1 class="text-white text-center">Hayallerinizi Tasarlayın, Biz <span style="font-weight:300;">Sıcak Yuvanıza </span> Dönüştürelim!</h1>
                        </div>
                        <p class="text-white text-center">Size özel çözümlerle, geleceğinizi bugünden inşa edin.</p>
                        <div class="d-flex justify-content-center align-items-center">
                            <a href="{{ route ('floor.plans')}}" class="theme-btn mt-40">Daha Fazla</a>
                            <a href="{{ route ('contact')}}" class="theme-btn mt-40 ml-20">İletişim</a>
                        </div>

                    </div>
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

<!-- Surec  -->
<div class="process-section section-padding pb-60 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9 col-lg-9 text-center">
                <div class="section-title">
                    <h6>Sürecimiz</h6>
                    <div class="heading-animation" style="perspective: 400px;">
                        <h2>
                            <div style="position: relative; display: inline-block; translate: none; rotate: none; scale: none; transform-origin: center; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                <span style="font-weight: 400;">Doğayla Uyumlu Yaşam:</span> Bungalov İnşasında Kilit Aşamalar
                            </div>
                        </h2>
                    </div>

                </div>
            </div>
        </div>
        <div class="row mt-60">
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <div class="single-process-item">
                    <div class="process-icon">
                        <i class="fa-sharp fa-light fa-pencil"></i>
                    </div>
                    <div class="process-content">
                        <h5>01. Tasarım ve Planlama</h5>
                        <p>Müşteri hayallerine göre özgün projeler tasarlanır ve titizlikle planlanır.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <div class="single-process-item">
                    <div class="process-icon">
                        <i class="fa-light fa-house"></i>
                    </div>
                    <div class="process-content">
                        <h5>02. Temel Atma ve İnşaat</h5>
                        <p>Dayanıklı temeller atılır, modern tekniklerle ana yapı inşa edilir.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <div class="single-process-item">
                    <div class="process-icon">
                        <i class="fa-light fa-thumbtack"></i>
                    </div>
                    <div class="process-content">
                        <h5>03. Mekan Düzenlemesi</h5>
                        <p>Estetik ve fonksiyonellik ön planda tutularak iç mekan ve dış cephe düzenlemeleri tamamlanır.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInUp;">
                <div class="single-process-item">
                    <div class="process-icon">
                        <i class="fa-light fa-gift"></i>
                    </div>
                    <div class="process-content">
                        <h5>04. Son Kontroller ve Teslim</h5>
                        <p> Detaylı incelemelerin ardından ev, sorunsuz şekilde müşteriye teslim edilir.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Kat Planlari  -->
<div class="project-section section-padding pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title">
                    <h6>Kat Planları</h6>
                    <div class="heading-animation">
                        <h2>Hayalinizdeki Bungalovun Kat Planları</h2>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-4 text-md-end">
                <a href="{{ route ('floor.plans')}}" class="theme-btn d-none d-md-inline-block">Tümünü Gör</a>
            </div>
        </div>
        <div class="row mt-20">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s">
                <a href="{{ route ('floor.detail')}}" class="single-project-item">
                    <div class="project-img">
                        <img class="service-img" src="{{ asset ('assets/img/tomruk/floor1.jpg') }}" alt="tomruk-house" title="Tomruk House">
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
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s">
                <a href="{{ route ('floor.detail')}}" class="single-project-item">
                    <div class="project-img">
                        <img class="service-img" src="{{ asset ('assets/img/tomruk/floor2.jpg') }}" alt="tomruk-house" title="Tomruk House">
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
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s">
                <a href="{{ route ('floor.detail')}}" class="single-project-item">
                    <div class="project-img">
                        <img src="{{ asset ('assets/img/project/3-3.jpg') }}" alt="tomruk-house" title="Tomruk House">
                    </div>
                    <div class="project-content">
                        <h5 class="one-title">Durango</h5>
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

<!-- Etkinlikler  -->
<div id="testimonial-3" class="testimonial-section" data-background="{{ asset ('assets/img/tomruk/bungo.jpg') }}">
    <div class="row">
        <div class="col-xl-7 col-lg-7">
            <div class="testimonial-wrap dark-bg">
                <div class="section-title d-flex justify-content-between">
                    <h6 class="text-white">Etkinlikler</h6>
                    <a href="{{ route ('events')}}" class="read_more_link">
                        <span class="link_text">Tümünü Gör</span>
                        <span class="link_icon"><i class="las la-arrow-right"></i></span>
                    </a>
                </div>
                <div class="testimonial-wrapper owl-carousel owl-loaded owl-drag">
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1206px, 0px, 0px); transition: all; width: 3621px;">
                            <div class="owl-item cloned" style="width: 573.4px; margin-right: 30px;">
                                <div class="single-testimonial-item">
                                    <div class="section-title">
                                    <div class="heading-animation" style="perspective: 400px;">
                                        <h2 class="text-white one-title"
                                            style="position: relative; display: inline-block; transform-origin: center; transform:
                                                translate3d(0px, 0px, 0px); opacity: 1;">
                                            <div style="position: relative; display: inline-block; transform-origin: 0 0; opacity: 1;">
                                                Kütük Aşkı Haftasonu
                                            </div>
                                        </h2>
                                    </div>

                                    </div>
                                    <div class="testimonial-content">
                                        <p class="text-white">Eğer araziye sahipseniz ve bir Kütük veya Ahşap Çerçeve Ev inşa etmeye hazırsanız,
                                            Bu Etkinliği Kaçırmayın! 4-5 Ekim 2024, Knoxville, TN
                                            Neden Kütük Aşkı Haftasonu’na Katılmalısınız?
                                            Bir ev inşa etmek büyük bir taahhüttür. Kütük veya ahşap çerçeve evinizi inşa etmeye hazırsanız,
                                            bu etkinlik size tasarım ve inşaat sürecine dair güven kazandıracak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 573.4px; margin-right: 30px;">
                                <div class="single-testimonial-item">
                                <div class="section-title">
                                    <div class="heading-animation" style="perspective: 400px;">
                                        <h2 class="text-white one-title"
                                            style="position: relative; display: inline-block; transform-origin: center; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                            <div style="position: relative; display: inline-block; transform-origin: 0 0; opacity: 1;">
                                                Kütük Aşkı Haftasonu
                                            </div>
                                        </h2>
                                    </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="text-white">Eğer araziye sahipseniz ve bir Kütük veya Ahşap Çerçeve Ev inşa etmeye hazırsanız,
                                            Bu Etkinliği Kaçırmayın! 4-5 Ekim 2024, Knoxville, TN
                                            Neden Kütük Aşkı Haftasonu’na Katılmalısınız?
                                            Bir ev inşa etmek büyük bir taahhüttür. Kütük veya ahşap çerçeve evinizi inşa etmeye hazırsanız,
                                            bu etkinlik size tasarım ve inşaat sürecine dair güven kazandıracak.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 573.4px; margin-right: 30px;">
                                <div class="single-testimonial-item">
                                    <div class="section-title">
                                        <div class="heading-animation" style="perspective: 400px;">
                                            <h2 class="text-white one-title"
                                                style="position: relative; display: inline-block; transform-origin: center; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                                <div style="position: relative; display: inline-block; transform-origin: 0 0; opacity: 1;">
                                                    Kütük Aşkı Haftasonu
                                                </div>
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="testimonial-content">
                                        <p class="text-white">Eğer araziye sahipseniz ve bir Kütük veya Ahşap Çerçeve Ev inşa etmeye hazırsanız,
                                            Bu Etkinliği Kaçırmayın! 4-5 Ekim 2024, Knoxville, TN
                                            Neden Kütük Aşkı Haftasonu’na Katılmalısınız?
                                            Bir ev inşa etmek büyük bir taahhüttür. Kütük veya ahşap çerçeve evinizi inşa etmeye hazırsanız,
                                            bu etkinlik size tasarım ve inşaat sürecine dair güven kazandıracak.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="las la-arrow-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="las la-arrow-right"></i></button></div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Fotograflar  -->
<div class="project-section project-three section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6 col-md-8 wow fadeInUp  animated" data-wow-delay="200ms"
             style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUp;">
                <div class="section-title mb-0">
                    <h6>Fotoğraflarımız</h6>
                    <div class="heading-animation" style="perspective: 400px;">
                        <h2>
                            <div style="position: relative; display: inline-block; translate: none; rotate:
                            none; scale: none; transform-origin: center; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                                Bungalov Projelerimizden Kareler
                            </div>
                        </h2>
                    </div>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-4 text-lg-end d-none d-lg-inline-block">
                <a href="{{ route ('photos')}}" class="theme-btn">Tümünü Gör</a>
            </div>
        </div>
        <div class="row gy-4 mt-40">
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
                <a href="{{ route ('photos') }}" class="single-project-wrapper">
                    <div class="project-bg">
                        <img class="photos" src="assets/img/tomruk/tomruk.jpg" alt="tomruk-house" title="Tomruk House">
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                <a href="{{ route ('photos') }}" class="single-project-wrapper">
                    <div class="project-bg">
                        <img class="photos" src="assets/img/tomruk/tomruk.jpg" alt="tomruk-house" title="Tomruk House">
                    </div>
                </a>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                <a href="#" class="single-project-wrapper">
                    <div class="project-bg">
                        <img class="photos" src="assets/img/tomruk/tomruk.jpg" alt="tomruk-house" title="Tomruk House">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>


<!-- Video  -->
<div id="about-2" class="about-section dark-bg section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6 col-lg-6">
            <div class="about-img-wrap" style="position: relative;">
                <img src="{{ asset ('assets/img/tomruk/process.jpg') }}" alt="tomruk-house" title="Tomruk House">
                <div class="about-desc">
                    <h4 class="text-center" >Siz hayal edin, biz yapalım.</h4>
                </div>

                <!-- Play Button Overlay -->
                <div class="video-section" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: 10;">
                    <div class="play-btn">
                        <a href="https://www.youtube.com/watch?v=ENSjcy3eh8U" class="video-play-btn mfp-iframe">
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </div>

                <!-- Optional Overlay for Dimming the Image -->
                <div class="overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                background-color: rgba(0, 0, 0, 0.3); z-index: 5;"></div>
            </div>

            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="about-content-wrap">
                    <div class="section-title">
                        <h6>Videolar</h6>
                        <div class="heading-animation" style="perspective: 400px;">
                            <h2 class="text-white" style="display: inline-block; transform: translate3d(0px, 0px, 0px); opacity: 1;">
                            İnşa Sürecine <span>Tanık </span> Olun!
                            </h2>
                        </div>

                    </div>
                    <p class="text-white">Son projelerimize göz atarak bungalov ev
                        inşasında nasıl yenilikler yaptığımızı keşfedin. Faydalı bilgiler
                        ve ilham verici fikirler için kütüphanemizi ziyaret etmenizi öneririz.
                        Orada, hayalinizdeki evi gerçeğe dönüştürmenize yardımcı olacak eğitim
                        ipuçları ve sunumlar bulabilirsiniz.</p>

                    <a class="theme-btn mt-20" href="{{ route ('videos')}}">Tümünü Gör</a>
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


@endsection
