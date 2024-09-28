@extends('frontend.layouts.app')

@section('content')

<!-- Banner -->
<div class="breadcrumb-area" style="height: 300px;">
    <img src="{{ asset('assets/img/tomruk/banner.jpg') }}" alt="tomruk-house" class="breadcrumb-bg">
    <div class="overlay-3"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="breadcrumb-title">
                    <h1>Form</h1>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-section gray-bg section-padding">
    <div class="container mt-4 justify-content-center d-flex">
        <div class="col-6">
            <form action="#" method="post">
                <div class="row mb-3">
                    <div class="col-2 text-end">
                        <input type="checkbox" id="terms" name="terms" required>
                    </div>
                    <div class="col-6">
                        <label for="terms">Evet! Lütfen bana bir broşür gönderin!</label>
                    </div>

                </div>
                <div class="row mb-3 ">
                    <div class="col-4 text-end">
                        <label for="name1">İsminiz:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="name1" name="name1" class="form-control" placeholder="Adınızı giriniz" required="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="lastname">Soyadınız *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Soyadınızı giriniz" required="">
                    </div>
                </div>
                <!-- E-posta -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="email">E-posta *</label>
                    </div>
                    <div class="col-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-posta adresinizi giriniz" required="">
                    </div>
                </div>
                <!-- Sokak Adresi 1 -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="address1">Sokak Adresi 1 *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="address1" name="address1" class="form-control" placeholder="Adresinizi giriniz" required="">
                    </div>
                </div>
                <!-- Şehir -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="city">Şehir *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="city" name="city" class="form-control" placeholder="Şehir" required="">
                    </div>
                </div>
                <!-- Eyalet/İl -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="state">Eyalet/İl *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="state" name="state" class="form-control" placeholder="Eyalet veya İl" required="">
                    </div>
                </div>
                <!-- Posta Kodu -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="postalcode">Posta Kodu *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="postalcode" name="postalcode" class="form-control" placeholder="Posta Kodu" required="">
                    </div>
                </div>
                <!-- Cep Telefonu -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="cell">Cep Telefonu</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="cell" name="cell" class="form-control" placeholder="Cep Telefonu">
                    </div>
                </div>
            </form>
        </div>
        <div class="col-6">
            <form action="#" method="post">
                <div class="row mb-3 ">
                    <div class="col-4 text-end">
                        <label for="name1">İsminiz:</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="name1" name="name1" class="form-control" placeholder="Adınızı giriniz" required="">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="lastname">Soyadınız *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Soyadınızı giriniz" required="">
                    </div>
                </div>
                <!-- E-posta -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="email">E-posta *</label>
                    </div>
                    <div class="col-6">
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-posta adresinizi giriniz" required="">
                    </div>
                </div>
                <!-- Sokak Adresi 1 -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="address1">Sokak Adresi 1 *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="address1" name="address1" class="form-control" placeholder="Adresinizi giriniz" required="">
                    </div>
                </div>
                <!-- Şehir -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="city">Şehir *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="city" name="city" class="form-control" placeholder="Şehir" required="">
                    </div>
                </div>
                <!-- Eyalet/İl -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="state">Eyalet/İl *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="state" name="state" class="form-control" placeholder="Eyalet veya İl" required="">
                    </div>
                </div>
                <!-- Posta Kodu -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="postalcode">Posta Kodu *</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="postalcode" name="postalcode" class="form-control" placeholder="Posta Kodu" required="">
                    </div>
                </div>
                <!-- Cep Telefonu -->
                <div class="row mb-3">
                    <div class="col-4 text-end">
                        <label for="cell">Cep Telefonu</label>
                    </div>
                    <div class="col-6">
                        <input type="text" id="cell" name="cell" class="form-control" placeholder="Cep Telefonu">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
