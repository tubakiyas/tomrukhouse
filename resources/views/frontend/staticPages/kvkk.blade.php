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
                    <h1>KVKK</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="skill-section gray-bg section-padding">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-xl-12 col-lg-6 col-md-7">
                <div class="skill-content-wrap">
                    <div class="section-title">
                        <h2>KVKK</h2>
                    </div>
                    <p>
                        1. Tanımlar <br>
                        Bu KVKK, [Şirket Adı] tarafından sağlanan hizmetler ile kullanıcıların kişisel bilgilerini koruma amacını taşımaktadır.<br>

                        2. Toplanan Bilgiler<br>
                        Kişisel bilgileriniz, aşağıdaki durumlarda toplanabilir:<br>

                        Hizmet kayıtları (isim, e-posta, telefon numarası vb.)<br>
                        Kullanım verileri (IP adresi, tarayıcı türü, erişim zamanı vb.)<br>
                        3. Bilgi Kullanımı<br>
                        Toplanan kişisel bilgiler, aşağıdaki amaçlarla kullanılabilir:<br>

                        Hizmetlerin sağlanması ve yönetilmesi<br>
                        Müşteri desteği sağlanması<br>
                        İletişim ve bilgilendirme<br>
                        4. Bilgi Paylaşımı<br>
                        Kişisel bilgileriniz, yalnızca aşağıdaki durumlarda üçüncü şahıslarla paylaşılabilir:<br>

                        Yasal zorunluluklar<br>
                        Hizmet sağlayıcılarla (veri analizi, müşteri desteği vb.)<br>
                        5. Bilgi Güvenliği<br>
                        Kişisel bilgilerinizin güvenliği bizim için önemlidir. Bu nedenle, uygun güvenlik önlemleri alınmaktadır. <br>
                        Ancak, internet üzerinden veri iletiminin tamamen güvenli olduğunu garanti edemeyiz.<br>

                        6. Kullanıcı Hakları<br>
                        Kullanıcılar, kişisel bilgilerine erişim talep etme, düzeltme, silme ve sınırlama haklarına sahiptir. Bu haklar, geçerli yasalar çerçevesinde uygulanacaktır.<br>

                        7. Değişiklikler<br>
                        Bu KVKK, gerektiğinde güncellenebilir. Değişiklikler hakkında bilgilendirme yapılacak ve güncel sözleşme web sitemizde yayınlanacaktır.<br>

                        8. İletişim<br>
                        Bu sözleşme ile ilgili sorularınız için bizimle [e-posta adresi] üzerinden iletişime geçebilirsiniz.<br>

                        Tarih: [Tarih]<br>
                        [Şirket Adı]</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
