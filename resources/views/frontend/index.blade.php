@extends('frontend.layout.app') @section('content')
@include('frontend.layout.slider')

<div class="container" style="margin-top:75px">
    <div class="row">


        <div class="heading heading-border heading-middle-border heading-middle-border-center">
            <h2 class="font-weight-normal"> HİZMETLERİMİZ</strong></h2>
        </div>

        @foreach ($Service as $item)
        <div class="col-md-4 mb-3">
            <a href="{{ route('servicedetail', $item->slug)}}" aria-label="">
                <span
                    class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-info thumb-info-no-zoom thumb-info-slide-info-hover">
                    <span class="thumb-info-wrapper">
                        <img
                            src="{{ (!$item->getFirstMediaUrl('page')) ? '/backend/resimyok.jpg': $item->getFirstMediaUrl('page','thumb')}}"
                            class="img-fluid"
                            alt="{{ $item->title}} - İomer Atık Yönetimi">
                        <span class="thumb-info-title">
                            <span class="thumb-info-slide-info-hover-1">
                                <span class="thumb-info-inner text-1 text-uppercase">{{ $item->title}}</span>
                            </span>
                            <span class="thumb-info-slide-info-hover-2">
                                <span class="thumb-info-type">Devamını Oku</span>
                            </span>
                        </span>
                    </span>
                </span>
            </a>
        </div>
        @endforeach

        <section class="call-to-action with-borders with-button-arrow mb-3 mt-3">
            <div class="col-sm-9 col-lg-9">
                <div class="call-to-action-content">
                    <h3>TunaTech - 
                        <strong class="font-weight-extra-bold">Her Yerde Güvenlik, Her Zaman Bağlantı!</strong>
                    </h3>
                    <p class="mb-0">Telekomünikasyon hizmetleri ve IP kamera sistemlerimizle işletmenize tam güvenlik ve sürekli iletişim garantisi veriyoruz.</p>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="call-to-action-btn">
                    <a
                        href="{{ route('contactus')}}"
                        target="_blank"
                        class="btn btn-modern text-2 btn-secondary">İletişime Geç</a>
                    <span
                        class="arrow hlb d-none d-md-block appear-animation animated rotateInUpLeft appear-animation-visible"
                        data-appear-animation="rotateInUpLeft"
                        style="left: 100%; top: -32px; animation-delay: 100ms;"></span>
                </div>
            </div>
        </section>
        
    
        <div class="row mt-4 ">
            <div class="col-lg-12">

                <div class="heading heading-border heading-middle-border heading-middle-border-center">
                    <h2 class="font-weight-normal"> ÜRÜNLERİMİZ</strong></h2>
                </div>

                <div class="masonry-loader masonry-loader-showing">
                    <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                        @foreach ($Product as $item )
                           <div class="col-sm-6 col-lg-4 mb-3">
                            <div class="product mb-0">
                                <div class="product-thumb-info border-0 mb-3">
                                    <a href="shop-product-sidebar-left.html">
                                        <div class="product-thumb-info-image">
                                            <img alt="" class="img-fluid" src="https://picsum.photos/600/600?random={{ $item->id}}">
                                        </div>
                                    </a>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">electronics</a>
                                        <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                            <a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">
                                               {{ $item->title}}
                                            </a>
                                        </h3>
                                    </div>
                                </div>
                            
                            
                            </div>
                        </div>  
                        @endforeach
                       

                    </div>
                    
                </div>
            </div>
        </div>
			

        <section class="section bg-primary">
            <div class="container-fluid">
                <div class="row counters counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="15" data-append="+">15</strong>
                            <label>Yıllık Tecrübe</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="35" data-append="+">6</strong>
                            <label>Uzman Kadro</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <strong data-to="100" data-append="+">100</strong>
                            <label>Tamamlanan Proje</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="500" data-append="+">500</strong>
                            <label>Mutlu Müşteri</label>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</div>

<div class="container py-5 my-5">
    <div class="row justify-content-center pb-3 mb-4">
        <div class="col-lg-9 col-xl-8 text-center">
            <div class="overflow-hidden">
                <h2 class="font-weight-bold text-color-dark line-height-2 mb-0 " data-="maskUp" data--delay="250">SIKÇA SORULAN SORULAR</h2>
            </div>
            <div class="d-inline-block custom-divider divider divider-danger divider-small my-3">
                <hr class="my-0 " data-="customLineProgressAnim" data--delay="650">
            </div>
            <p class="font-weight-light text-3-5 mb-0 " data-="fadeInUpShorter" data--delay="500">
                Hizmetlerimiz, firmamız hakkında sıkça sorulan sorular
            </p>
        </div>
    </div>
    <div class="row row-gutter-sm">
        <div class="col mb-4 mb-lg-0">
            <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                <div class="card card-default">
                    <div class="card-header" id="collapse100HeadingOne">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-white font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="false" aria-controls="collapse100One">
                                1 - Zayıf Akım Sistemleri Nedir ve Hangi Alanlarda Kullanılır?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse100One" class="collapse" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100" style="">
                        <div class="card-body">
                            <p class="mb-0">
                                Zayıf akım sistemleri, düşük gerilimle çalışan elektriksel sistemlerdir ve genellikle güvenlik kameraları, yangın alarm sistemleri, telefon hatları ve bina otomasyonu gibi alanlarda kullanılır.

                            </p>
                         </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse100HeadingTwo">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-white font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false" aria-controls="collapse100Two">
                                2 - Network Switch ve POE Switch Arasındaki Fark Nedir?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo" data-bs-parent="#accordion100" style="">
                        <div class="card-body">
                            <p class="mb-0">Network switch, cihazların birbirine bağlanarak veri paylaşımı yapmasını sağlar. POE switch ise aynı zamanda bağlı cihazlara elektrik gücü iletebilir, bu da özellikle IP kameralar gibi cihazlar için idealdir.</p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse100HeadingThree">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-white font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Three" aria-expanded="false" aria-controls="collapse100Three">
                                3 - NVR IP Kamera Sistemleri Ne Tür Avantajlar Sunar?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree" data-bs-parent="#accordion100">
                        <div class="card-body">
                            <p class="mb-0">NVR IP kamera sistemleri, yüksek çözünürlüklü video kayıt imkanı sunar ve uzak erişim sağlayarak kameraları istediğiniz yerden yönetmenize olanak tanır.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse100HeadingFour">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-white font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Four" aria-expanded="false" aria-controls="collapse100Four">
                                4 - Numara Taşıma ve Numara Tahsis İşlemleri Ne Kadar Sürede Tamamlanır?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour" data-bs-parent="#accordion100">
                        <div class="card-body">
                            <p class="mb-0">Numara taşıma işlemi genellikle 1-3 iş günü içinde tamamlanır. Numara tahsis işlemleri ise sağlayıcıya bağlı olarak aynı gün içerisinde gerçekleştirilebilir.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse100HeadingFive">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle text-white font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Five" aria-expanded="false" aria-controls="collapse100Five">
                                5 - IP Santral Sistemleri Hangi İşletmeler İçin Uygundur?
                            </a>
                        </h4>
                    </div>
                    <div id="collapse100Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion100">
                        <div class="card-body">
                            <p class="mb-0">IP santral sistemleri, çok sayıda çağrıyı yönetmek isteyen küçükten büyüğe her türlü işletme için uygundur. Özellikle uzaktan çalışma ortamlarında büyük avantaj sağlar.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4 col-lg-3 text-center text-md-left">
            <div class="" data-="fadeInUpShorter" data--delay="1000">
                <h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 mb-3">Misyonumz</h3>
                <p class="pb-1 mb-2"></p>
                <a href="{{ route('corporatedetail', 'hakkimizda')}}" class="btn btn-danger  font-weight-bold btn-px-5 py-3 mb-2">HAKKIMIZDA</a>

                <hr class="my-4">
            </div>
            <div class="" data-="fadeInUpShorter" data--delay="1100">
                <h3 class="font-weight-bold text-color-dark text-transform-none text-5-5 pt-2 mb-3">Başka Sorunuz</h3>
                <p class="pb-1 mb-2">Farklı bir sorunuz varsa lütfen bizimle iletişime geçiniz.</p>
                <a href="/iletisim" class="btn btn-danger custom-btn-border-radius font-weight-bold btn-px-5 py-3">İLETİŞİME GEÇ</a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('customCSS')
   
@endsection

@section('customJS')
   
@endsection