@extends('frontend.layout.app')

@section('content')
    
<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" 
style="background-image: url(img/page-header/page-header-about-us.jpg);">
<div class="container">
    <div class="row mt-5">
        <div class="col-md-12 align-self-center p-static order-2 text-center">
            <h1 class="text-9 font-weight-bold">{{ __('site.iletisim')}}</h1>
            <span class="sub-title">{{ config('settings.siteTitle')}}</span>
        </div>
        <div class="col-md-12 align-self-center order-1">
            <ul class="breadcrumb breadcrumb-light d-block text-center">
                <li><a href="{{ route('home')}}">{{ __('site.anasayfa')}}</a></li>
                <li class="active">{{ __('site.iletisim')}}</li>
            </ul>
        </div>
    </div>
</div>
</section>


<div class="container py-4">

    <div class="row mb-5">
        <div class="col-lg-4">

            <div class="overflow-hidden mb-3">
                <h4 class="pt-5 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" data-plugin-options="{'accY': -200}">
                    İletişime <strong>Geç</strong>
                </h4>
            </div>
            <div class="overflow-hidden mb-3">
                <p class="lead text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="400" data-plugin-options="{'accY': -200}">
                    TunaTech olarak bize ulaştığınızı görmekten mutluluk duyuyoruz.
                    Neler sunabileceğimiz hakkında daha fazla bilgi edinmek için bizimle iletişime geçebilir 
                    veya şirket kataloğumuzu inceleyebilirsiniz.
                </p>
            </div>

        </div>
        <div class="col-lg-4 offset-lg-1 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800" data-plugin-options="{'accY': -200}">

            <h4 class="pt-5">İletişim  <strong>Bilgilier</strong></h4>
            <ul class="list list-icons list-icons-style-3 mt-2">
                <li><i class="fas fa-map-marker-alt top-6"></i> <strong>Adres:</strong> {{ config('settings.adres1')}}</li>
                <li><i class="fas fa-phone top-6"></i> <strong>Telefon:</strong> {{ config('settings.telefon1')}}</li>
                <li><i class="fas fa-phone top-6"></i> <strong>Telefon:</strong> {{ config('settings.telefon2')}}</li>
                <li><i class="fas fa-envelope top-6"></i> <strong>Email:</strong> <a href="mailto:{{ config('settings.email1')}}">{{ config('settings.email1')}}</a></li>
            </ul>

        </div>
        <div class="col-lg-3 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000" data-plugin-options="{'accY': -200}">

            <h4 class="pt-5">Çalışma  <strong>Saatleri</strong></h4>
            <ul class="list list-icons list-dark mt-2">
                <li><i class="far fa-clock top-6"></i> Ptesi - Cuma - 09:00-18:00</li>
                <li><i class="far fa-clock top-6"></i> cumartesi - 09:00-14:00</li>
                <li><i class="far fa-clock top-6"></i> Pazar - Kapalı</li>
            </ul>

        </div>
    </div>

    


    <div class="row mb-2">
        <div class="col">

            <form class="contact-form-recaptcha-v3" method="POST">
     
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label class="form-label mb-1 text-2">Adınız Soyadınız</label>
                        <input type="text" class="form-control text-3 h-auto py-2" name="name" required>
                    </div>
                    <div class="form-group col-lg-6">
                        <label class="form-label mb-1 text-2">Email Adresiniz</label>
                        <input type="email" class="form-control text-3 h-auto py-2" name="email" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label mb-1 text-2">Konu</label>
                        <input type="text" class="form-control text-3 h-auto py-2" name="subject" required>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <label class="form-label mb-1 text-2">Mesajınız</label>
                        <textarea rows="5" class="form-control text-3 h-auto py-2" name="message" required></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col">
                        <input type="submit" value="Mesajı Gönder" class="btn btn-primary btn-modern">
                    </div>
                </div>
            </form>

        </div>
    </div>
   

</div>
@endsection