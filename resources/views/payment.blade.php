@extends('layouts.app')

@push('css')
<link href="{{ asset('css/homepage.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/media-query.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
<section class="first-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 mb-32 info-container">
                <h1 class="heading">Care where you are</h1>
                <p class="subheading"> Find out why Homage is the preferred way Malaysians are taking control of their health.</p>
                <a href="#" class="btn-consultation mt-8">
                    <span class="btn-label fw-bold">Get a Free Care Consult</span>
                    <span class="homage icon-arrow-right ml-4"></span>
                </a>
                <div class="appButtons d-flex justify-content-start">
                    <a href="https://itunes.apple.com/us/app/homage-care-for-seniors/id1277541542?mt=8" target="_blank" class="appButton"><span class="appButton__icon icon-appstore"></span> App Store</a>
                    <a href="https://play.google.com/store/apps/details?id=co.homage.careowner&amp;hl=en_US" target="_blank" class="appButton"><span class="appButton__icon icon-playstore"></span> Google Play</a>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12 d-flex flex-end justify-content-center">
                <img src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Hero-Malay-family@2x.png"
                class="img-family" alt=""
                loading="lazy"
                srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Hero-Malay-family@2x.png 990w,
                https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Hero-Malay-family@2x-250x168.png 250w,
                https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Hero-Malay-family@2x-844x566.png 844w,
                https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Hero-Malay-family@2x-768x515.png 768w,
                https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Hero-Malay-family@2x-120x80.png 120w"
                sizes="(max-width: 560px) 100vw, 560px">
                <div class="blobs">
                    <object data="https://www.homage.com.my/wp-content/themes/homage/img/Hero-Blob-1.svg" type="image/svg+xml" class="blob blob--1"></object>
                    <object data="https://www.homage.com.my/wp-content/themes/homage/img/Hero-Blob-2.svg" type="image/svg+xml" class="blob blob--2"></object>
                </div>
            </div>
        </div>
    </div>
    <div class="curves">
        <object data="https://www.homage.com.my/wp-content/themes/homage/img/Hero-Curve-1.svg" type="image/svg+xml" class="curve curve-1"></object>
        <object data="https://www.homage.com.my/wp-content/themes/homage/img/Hero-Curve-2.svg" type="image/svg+xml" class="curve curve-2"></object>
    </div>
</section>
{{-- features --}}
<section class="features">
    <div class="container d-flex align-items-center justify-content-center">
        <div class="row w-90-m-a">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="featureItem d-flex align-items-center">
                <div class="featureIcon">
                    <span class="icon icon-professionals"></span>
                </div>
                <div class="featureText">
                    <span>Largest pool of Care Professionals</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="featureItem d-flex align-items-center">
                <div class="featureIcon">
                    <span class="icon icon-points-care"></span>
                </div>
                <div class="featureText">
                    <span>Round-the-clock care options</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="featureItem d-flex align-items-center">
                <div class="featureIcon">
                    <span class="icon icon-star"></span>
                </div>
                <div class="featureText">
                    <span>4.8 stars rating mobile app</span>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="featureItem d-flex align-items-center">
                <div class="featureIcon">
                    <span class="icon icon-pin"></span>
                </div>
                <div class="featureText">
                    <span>Get care at home, hospital or online</span>
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
{{-- partnership --}}
<section class="partners">
    <div class="container">
    <div class="swiper-row row d-none">
        <div class="col-12">
        <div class="card w-100">
            <div class="card-body w-100">
            <div class="partners__headings d-flex ">
                <h5 class="intro intro--solo">As seen on</h5>
                <div class="swiper mySwiper">
                <div class="swiper-wrapper ">
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="swiper-slide">
                    <img width="120" height="37" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="swiper-grid row d-none">
        <div class="col-12">
        <div class="card w-100">
            <div class="card-body w-100">
            <div class="partners__headings">
                <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    <h5 class="text-center p-3">As seen on</h5>
                </div>
                </div>
                <div class="row mb-4">
                <div class="col-12">
                    <div class="parent">
                    <div class="child">
                        <img width="80" class="img-fluid mb-2" height="25" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Sun.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Options.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Malaysia-Tatler.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-8TV-Chinese.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Astro-Awani.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Berita-Harian.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Bernama.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-BFM.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-China-Press.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Code-Blue.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-FMT-News.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Focus.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Hello-Doktor-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Hello-Doktor-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Hello-Doktor-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Hello-Doktor.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-New-Straits-Times-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-New-Straits-Times-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-New-Straits-Times-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-New-Straits-Times.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Oriental-Daily-News-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Oriental-Daily-News-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Oriental-Daily-News-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Oriental-Daily-News.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Penang-Hyper-Local-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Penang-Hyper-Local-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Penang-Hyper-Local-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Penang-Hyper-Local.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sarawak-Tribune-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sarawak-Tribune-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sarawak-Tribune-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sarawak-Tribune.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sinar-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sinar-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sinar-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-Sinar.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Iskandarian-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Iskandarian-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Iskandarian-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Iskandarian.png 260w" sizes="(max-width: 120px) 100vw, 120px">
                    </div>
                    <div class="child">
                        <img width="80" height="img-fluid mb-2" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Malaysian-Reserve-120x37.png" class="attachment-small size-small" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Malaysian-Reserve-120x37.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Malaysian-Reserve-250x77.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Featured-The-Malaysian-Reserve.png 260w" sizes="(max-width: 120px) 100vw, 120px">
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
    </div>
</section>

{{-- services --}}
<section class="services">
    <div class="container">
    <div class="d-flex services_container">
        <h2 class="services__heading mr-5 mt-10">Our Services</h2>
        <div class="service-tabs services__menu w-100" id="tabs">
        <div class="card-item d-flex flex-column service__menuItem">
            <a class="d-flex flex-column align-items-center active" id="personal-care">
            <span class="service__menuItem__icon icon-personal-care"></span>
            <span class="service__menuItem__label">Home Personal Care</span>
            </a>
        </div>
        <div class="card-item d-flex flex-column service__menuItem">
            <a class="d-flex flex-column align-items-center " id="nursing">
            <span class="service__menuItem__icon icon-nursing"></span>
            <span class="service__menuItem__label">Home Nursing</span>
            </a>
        </div>
        <div class="card-item d-flex flex-column service__menuItem">
            <a class="d-flex flex-column align-items-center " id="therapy">
            <span class="service__menuItem__icon icon-therapy"></span>
            <span class="service__menuItem__label">Home Theraphy</span>
            </a>
        </div>
        <div class="card-item d-flex flex-column service__menuItem">
            <a class="d-flex flex-column align-items-center " id="swab-test">
            <span class="service__menuItem__icon icon-swab-test"></span>
            <span class="service__menuItem__label">Covid-19 Swab Test</span>
            </a>
        </div>
        </div>
    </div>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane" id="personal-care-tab" role="tabpanel" aria-labelledby="personal-care-tab">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3>Home Personal Care</h3>
                <div class="service__content"> Our trained local caregivers assist with you and your loved one’s activities of daily living (ADLs) for safe and independent living at home. This includes eating, bathing, getting dressed, toileting, transferring and continence. </div>
                <div class="parent">
                    <div class="space pt-2">
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Home Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Caregivers</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Respite Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Elderly Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Medical Escort</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Dementia Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Parkinson's Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Cancer Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Palliative Care</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 services__imageSlider__container">
            <img class="img-fluid" width="250" height="294" src="https://www.homage.com.my/wp-content/uploads/sites/2/2020/12/Elder-Care-Medical-Escort-Image-1-2-250x294.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2020/12/Elder-Care-Medical-Escort-Image-1-2-250x294.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2020/12/Elder-Care-Medical-Escort-Image-1-2-120x141.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2020/12/Elder-Care-Medical-Escort-Image-1-2.png 340w" sizes="(max-width: 250px) 100vw, 250px">
            </div>
        </div>
        </div>
        <div class="tab-pane" id="nursing-tab" role="tabpanel" aria-labelledby="nursing-tab">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3>Home Nursing</h3>
                <div class="service__content"> Our licensed local nurses can save you and your loved ones a trip to the clinic and hospital. Get simple and complex nursing procedures such as tube, stoma and wound care in the comfort of your home. </div>
                <div class="parent">
                    <div class="space pt-2">
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Nursing Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Nursing Procedures</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Private Home Nurse</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Post-Surgery Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Diabetes Care</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Post-Stroke Care</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 services__imageSlider__container">
            <img width="240" height="300" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Nursing-250x312.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Nursing-250x312.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Nursing-120x150.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Nursing.png 520w" sizes="(max-width: 240px) 100vw, 240px">
            </div>
        </div>
        </div>
        <div class="tab-pane" id="therapy-tab" role="tabpanel" aria-labelledby="nursing-tab">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3>Home Therapy</h3>
                <div class="service__content"> Our experience local therapists are here to support your rehabilitation and recovery efforts when you return home, through personalised exercise and therapy treatment sessions. </div>
                <div class="parent">
                    <div class="space pt-2">
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Physiotherapy</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Occupational therapy</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Speech therapy</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Back Pain</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Arthritis</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Sports Injury</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Muscle Strains</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Knee Pain</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Neck Pain</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 services__imageSlider__container">
            <img width="240" height="300" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Therapy-250x312.png" class="attachment-medium size-medium __web-inspector-hide-shortcut__" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Therapy-250x312.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Therapy-120x150.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Home-Therapy.png 520w" sizes="(max-width: 240px) 100vw, 240px">
            </div>
        </div>
        </div>
        <div class="tab-pane" id="swab-test-tab" role="tabpanel" aria-labelledby="nursing-tab">
        <div class="row">
            <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                <h3>COVID-19 Swab Test</h3>
                <div class="service__content"> Our trusted Care Pros are trained to conduct RT-PCR and RTK-Antigen screenings, whether it be in your own home or at your office. You can also get vaccination escorts to vaccination centres today! </div>
                <div class="parent">
                    <div class="space pt-2">
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Vaccination Escort</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn">Kuala Lumpur & Selangor</button>
                    </div>
                    <div class="child mr-4 pt-3">
                        <button class="services_btn johor">Johor</button>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="col-md-4 services__imageSlider__container">
            <img width="240" height="300" src="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Covid-19-Swab-Test@2x-250x312.png" class="attachment-medium size-medium" alt="" loading="lazy" srcset="https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Covid-19-Swab-Test@2x-250x312.png 250w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Covid-19-Swab-Test@2x-120x150.png 120w, https://www.homage.com.my/wp-content/uploads/sites/2/2021/02/Services-Covid-19-Swab-Test@2x.png 520w" sizes="(max-width: 240px) 100vw, 240px">
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

<section class="howItWorks">
    <div class="curves">
    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_2" viewBox="0 0 1280 140.1">
        <style>
        .st0 {
            fill-rule: evenodd;
            clip-rule: evenodd;
            fill: #fff
        }
        </style>
        <path class="st0" d="M0 108.3s191.5-71.4 336.6-71.4c214.7 0 192.7 35.7 543.6 35.7 183.4 0 399.8-55.8 399.8-71.4v139H0v-31.9z" />
    </svg>
    </div>
    <div class="howItWorks__inner">
    <div class="container">
        <div class="row">
        <div class="col-12">
            <div class="howItWorks__headingContaine d-flex flex-end mb-3">
            <div class="howItWorks__homageLogo">
                <span class="icon-homage"></span>
            </div>
            <div class="howItWorks__headings">
                <h3 class="heading">How does Homage work?</h3>
                <p class="subheading">
                <a href="https://homage.onelink.me/hkKt/dc203038">Download the Homage app</a> and get connected right away.
                </p>
            </div>
            </div>
        </div>
        </div>
        <div class="row">
        <div class="col-md-4">
            <div class="howItWorks__item">
            <img src="https://www.homage.com.my/wp-content/themes/homage/img/How-Step-1.png" srcset="https://www.homage.com.my/wp-content/themes/homage/img/How-Step-1@2x.png 2x" alt="How it Works - Step 1" class="howItWorks__image">
            <h4>Speak to a Care Advisor</h4>
            <p>Call us at 016 299 2188 or request a callback from our friendly Care Advisory team. Learn more about our range of services and find out how Homage Care Professionals can help.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="howItWorks__item">
            <img src="https://www.homage.com.my/wp-content/themes/homage/img/How-Step-2.png" srcset="https://www.homage.com.my/wp-content/themes/homage/img/How-Step-2@2x.png 2x" alt="How it Works - Step 2" class="howItWorks__image">
            <h4>Make a Care Plan together</h4>
            <p>We will work with you to develop a personalised Care Plan based on your loved one’s health status, care requirements, and additional preferences.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="howItWorks__item">
            <img src="https://www.homage.com.my/wp-content/themes/homage/img/How-Step-3.png" srcset="https://www.homage.com.my/wp-content/themes/homage/img/How-Step-3@2x.png 2x" alt="How it Works - Step 3" class="howItWorks__image">
            <h4>Your personalised care begins</h4>
            <p>Together we will match you and your loved ones with an exceptional Care Professional. Stay up to date after every appointment with detailed reports on the Homage app.</p>
            </div>
        </div>
        </div>
        <div class="row footnote">
        <div class="col-12">
            <p>
            <a href="https://homage.onelink.me/hkKt/dc203038">Download the Homage app</a> and get connected right away.
            </p>
        </div>
        </div>
    </div>
    </div>
</section>

<section class="whyFamiliesUse">
    <div class="whyFamiliesUse__inner">
    <div class="container">
        <div class="row">
        <div class="col-12 text-center pb-5">
            <h3 class="whyFamiliesUse__heading">Why Families Prefer Homage</h3>
        </div>
        <div class="col-md-4 col-6">
            <div class="whyFamiliesUse__icon icon-care-plans"></div>
            <h4>Extensive home care services</h4>
            <p>Choose from a wide range of in-home services including nursing care, procedures and home rehabilitation.</p>
        </div>
        <div class="col-md-4 col-6">
            <div class="whyFamiliesUse__icon icon-professional-carers"></div>
            <h4>All-Malaysian carers</h4>
            <p>Get quality care from 3,000+ qualified caregivers, nurses, and therapists.</p>
        </div>
        <div class="col-md-4 col-6">
            <div class="whyFamiliesUse__icon icon-zero-commitment"></div>
            <h4>No commitment period</h4>
            <p>Take advantage of flexible care solutions from 1 hour onwards.</p>
        </div>
        <div class="col-md-4 col-6">
            <div class="whyFamiliesUse__icon icon-urgent-care"></div>
            <h4>Supporting long distance care</h4>
            <p>Delivering trusted care for your loved ones across Kuala Lumpur, Selangor, Penang, Johor and Ipoh.</p>
        </div>
        <div class="col-md-4 col-6">
            <div class="whyFamiliesUse__icon icon-long-term-packages"></div>
            <h4>Caregiving support when you need it the most</h4>
            <p>Providing care solutions from post-hospital discharge to respite care when the primary caregiver is away.</p>
        </div>
        <div class="col-md-4 col-6">
            <div class="whyFamiliesUse__icon icon-care-reports"></div>
            <h4>Equipping families for better care</h4>
            <p>Helping families provide better care at home through one-on-one learning and guidance.</p>
        </div>
        <div class="col-12 whyFamiliesUse__button text-center position-relative">
            <a href="#" class="openModal">Get a Free Care Consult</a>
        </div>
        </div>
    </div>
    </div>
</section>

<section class="chronicConditions">
    <div class="container-lg p-3">
    <div class="row">
        <div class="col-12">
        <div class="chronicConditions__headings text-center">
            <h3 class="heading">Only the best care for you and your loved ones</h3>
            <p class="subheading">Get a personalised care plan. Here's what we can help with.</p>
        </div>
        </div>
        <div class="col-12">
        <div class="chronicConditions__items ">
            <h4 class="chronicConditions__items__heading">
            <span class="icon icon-heart-beat"></span>
            <span>Medical Conditions</span>
            </h4>
            <div class="chronicConditions__list d-flex justify-content-start flex-wrap">
            <div class="chronicConditions__item ">
                <div class="item__inner">
                <div class="icon icon-dementia"></div>
                <div class="text-base font-semibold">Dementia</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-diabetes"></div>
                <div class="text-base font-semibold">Diabetes</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-hypertension"></div>
                <div class="text-base font-semibold">Hypertension</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-stroke"></div>
                <div class="text-base font-semibold">Stroke</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-cancer"></div>
                <div class="text-base font-semibold">Cancer</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-parkinsons"></div>
                <div class="text-base font-semibold">Parkinson's</div>
                </div>
            </div>
            </div>
        </div>
        <div class="chronicConditions__items">
            <h4 class="chronicConditions__items__heading">
            <span class="icon icon-speech-bubbles"></span>
            <span>How We Can Help</span>
            </h4>
            <div class="chronicConditions__list d-flex justify-content-start flex-wrap">
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-respite-care"></div>
                <div>Respite Care for Caregiver</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-stay-in-care"></div>
                <div>Round the clock care</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-helper"></div>
                <div>Relief/Supplement helper</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-medicine-delivery"></div>
                <div>Medical escort</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-tea"></div>
                <div>Companionship</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-hygiene"></div>
                <div>Personal Hygiene</div>
                </div>
            </div>
            <div class="chronicConditions__item">
                <div class="item__inner">
                <div class="icon icon-post-discharge"></div>
                <div>Post Hospital Discharge</div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>

<section class="careProfessionals">
    <div class="container-fluid">
        <div class="row careProfessionals__upper position-relative">
            <div class="col-lg-8 col-md-6 col-6 align-self-end order-sm-1 order-2">
                <div class="yellowLine">
                    <object data="https://www.homage.com.my/wp-content/themes/homage/img/yellow-line.svg" type="image/svg+xml"></object>
                </div>
                <img src="https://www.homage.com.my/wp-content/themes/homage/img/Care-Pro-Pool-Image.png" srcset="https://www.homage.com.my/wp-content/themes/homage/img/Care-Pro-Pool-Image@2x.png 2x" alt="Care Professionals" class="careProfessionals__image ">
                <div class="careProfessionals__card card-1">
                    <div>100%</div>
                    <div class="text-sm">screened</div>
                </div>
                <div class="careProfessionals__card card-2">
                    <div>4.8 <span class="icon-star"></span></div>
                    <div class="text-sm">rating</div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 order-sm-2 order-1">
                <h3 class="careProfessionals__heading">Largest Pool of Care Professionals</h3>
            </div>
        </div>

        <div class="row careProfessionals__lower">
            <div class="careProfessionals__lower__inner">
                <div class="col-12">
                    <p class="careProfessionals__lower__heading">Care Professionals are <b>thoroughly screened</b> to ensure care quality</p>
                </div>
                <div class="row careProfessionals__steps">
                    <div class="col-md-2 col-sm-4 col-6 step step-1">
                        <hr class="step__line">
                        <div class="step-number">1</div>
                        <p>Application</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 step step-2">
                        <hr class="step__line">
                        <div class="step-number">2</div>
                        <p>Interview</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 step step-3">
                        <hr class="step__line">
                        <div class="step-number">3</div>
                        <p>Screening</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 step step-4">
                        <hr class="step__line">
                        <div class="step-number">4</div>
                        <p>Training</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 step step-5">
                        <hr class="step__line">
                        <div class="step-number">5</div>
                        <p>Onboarding</p>
                        <p class="subscript">&lt; 5% Selection Rate</p>
                    </div>
                    <div class="col-md-2 col-sm-4 col-6 step step-6">
                        <div class="step-number">6</div>
                        <p>Reviews and Audits</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ourApp">
    <div class="ourApp__inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center">
                    <div id="our-app" class="ourApp__content">
                        <p class="preheading fw-bold text-uppercase text-lg">Our App</p>
                        <h3 class="heading mb-4">Caring just got easier</h3>
                        <p>With the Homage mobile app, request and manage care for you and your loved ones wherever, whenever. Whether you need therapy, home, nursing or medical care, help is just a few taps away.</p>
                        <div class="ourApp__buttons">
                            <a href="https://itunes.apple.com/us/app/homage-care-for-seniors/id1277541542?mt=8" target="_blank" class="appBadge"><img src="https://www.homage.com.my/wp-content/themes/homage/img/app-store-badge.svg" alt="Homage Apple Appstore"></a>
                            <a href="https://play.google.com/store/apps/details?id=co.homage.careowner&amp;hl=en_US" target="_blank" class="appBadge"><img src="https://www.homage.com.my/wp-content/themes/homage/img/google-play-badge.svg" alt="Homage Google Playstore"></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ourApp__screens__container">
                    <img src="https://www.homage.com.my/wp-content/themes/homage/img/app-screens-my.gif" alt="Care Professionals" class="ourApp__screens">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="testimonials__heading">
                    <h3 class="fw-bold">What our customers say</h3>
                    <a class="fw-bold" href="/reviews/">View all reviews</a>
                </div>
            </div>
            <div class="col-12">
                <div class="testimonials__slider">
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Help during the pandemic</div>
                            <p class="testimonial__content">The team has been sublime to work with albeit having to temporarily halt engaging them for care services due to the pandemic situation now in Malaysia. All teething issues in the initial phase of engagement were swiftly addressed and satisfactorily so. Special shoutout to Shirley from Homage who has been responding promptly to all my queries and requests (and went far and beyond my expectations with her actions in all counts).</p>
                            <div class="testimonial__name">Wong Voon Bing</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Highly recommended care when I'm away</div>
                            <p class="testimonial__content">My father had a fall recently and sustained a hip fracture. Living overseas and not being able to travel back home to assist with recovery was very worrying. A friend recommended Homage to help with his nursing care. They are prompt in replying to messages. The care provided was excellent and highly professional. We have been very pleased with the service. There are times when we had to change the appointment time and they obliged and looked into our needs. </p>
                            <div class="testimonial__name">Anisa Aisha</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Positive experience</div>
                            <p class="testimonial__content">Our experience has been very positive. So far, we have used their Care Pros perhaps 10 times (for checking in on mum) and she has been nothing short of kind and supportive. The coordinator Bel has also been a great help since day one. I find the price to be reasonable. Love the reporting feature on their app. You could see what has been done during the visit. It’s worth trying out.</p>
                            <div class="testimonial__name">Adelaine Yeo</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">My gratitude and appreciation</div>
                            <p class="testimonial__content">My 85-year-old mother, who underwent post-ventral incisional hernia surgery in January 2019 had CPs from Homage, all professionally trained, from leading Malaysian hospitals. The CPs nursed my mother with diligence, and compassion; providing invaluable tips on elderly caregiving to family members. My gratitude and appreciation to Team Homage.</p>
                            <div class="testimonial__name">Azwan Shahuddin</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Definitely one of the best!</div>
                            <p class="testimonial__content">I had positive experiences with Homage so far. They are flexible, affordable, and professional. The coordinator from Homage has been very helpful and accommodating to my request since day one. Caregivers assigned to take care of my grandmother are punctual, professionally trained and attentive. Hope they will continue to serve well.</p>
                            <div class="testimonial__name">Kamilah Barvin</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Comprehensive physiotherapy program</div>
                            <p class="testimonial__content">Homage has helped us a lot in assisting the recovery of our beloved father. They provide us with a comprehensive explanation regarding the physiotherapy program. The therapist they sent is highly qualified, courteous, passionate, and gave outstanding service. And above all, the charges are fair and affordable.</p>
                            <div class="testimonial__name">Farizal Anam</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Guidance for my domestic helper</div>
                            <p class="testimonial__content">Thank you Homage for your assistance after my mom was discharged from the hospital due to dengue fever. Mom regained her confidence to take her first shower after discharge with the help of Homage's caregiver, something my domestic helper will not be able to do. Also to guide my domestic helper to handle her in a more hygienic way. My maid learned the proper method and able to give better care to mom now. Highly recommend it to people who looking for professional care services to manage family members who need help.</p>
                            <div class="testimonial__name">Jenny Lim</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Hassle-free swab test</div>
                            <p class="testimonial__content">It's really hassle-free when u can have the COVID-19 swab test without leaving ur home. The response is really fast, the app is efficient. Thank you for your services.   </p>
                            <div class="testimonial__name">Sofia Mustaffa</div>
                        </div>
                        <div class="testimonial">
                            <div class="testimonial__rating">
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                                <span class="icon-star"></span>
                            </div>
                            <div class="testimonial__title">Overall a good team work</div>
                            <p class="testimonial__content">I want to thank Homage for their excellent service especially Ms. Ginger for her brilliant communication and customer service and for making the necessary arrangements. She does a good follow-up before and after the physio, also accurate feed-back. We appreciate Ms. Shu for her excellent physio service which made my mother gain confidence that she can walk again. Ms. Shu is very patient, hard-working, and committed to seeing my mum will be completely restored and healed. Thank you.</p>
                            <div class="testimonial__name">Paul Mahendran</div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="consult">
    <div class="consult__bgLight"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 consult__imageColumn">
                <div class="consult__imageContainer">
                    <img src="https://www.homage.com.my/wp-content/themes/homage/img/consult-banner-image.png" srcset="https://www.homage.com.my/wp-content/themes/homage/img/consult-banner-image@2x.png 2x" alt="Make Home Care Personal To Your Loved One" class="consult__image">
                </div>
            </div>
            <img src="https://www.homage.com.my/wp-content/themes/homage/img/consult-curve.svg" alt="curve" class="consult__curve">
            <div class="col-lg-7 consult__contentColumn">
                <div class="consult__contentContainer">
                    <h3>Make Home Care Personal To Your Loved One</h3>
                    <p>Get started with a free consultation today, and learn why thousands of Malaysians trust Homage to deliver the best care in their homes.</p>
                    <a href="#" class="consult__button openModal">Get a Free Care Consult</a>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="categories">
    <div class="container-fluid">
    <div class="row">
        <div class="col-12">
        <span class="footer__categories__heading"> Some of our top categories in Malaysia </span>
        <div class="footer__categories">
            <div class="footer__category">
            <div class="menuContainer">
                <div class="categoryHeading__container">
                <span class="icon icon-personal-care"></span>
                <span class="categoryHeading">Home Care &amp; Nursing</span>
                </div>
                <ul class="menu">
                <li id="menu-item-39661" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39661">
                    <a href="https://www.homage.com.my/services/home-care/">Home Care in Malaysia</a>
                </li>
                <li id="menu-item-39950" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39950">
                    <a href="https://www.homage.com.my/services/elderly-care/">Elderly Care in Malaysia</a>
                </li>
                <li id="menu-item-39951" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39951">
                    <a href="https://www.homage.com.my/services/respite-care/">Respite Care in Malaysia</a>
                </li>
                <li id="menu-item-39952" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39952">
                    <a href="https://www.homage.com.my/services/caregivers/">Caregivers In Malaysia</a>
                </li>
                <li id="menu-item-39953" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39953">
                    <a href="https://www.homage.com.my/services/part-time-caregiver/">Part-time Caregivers</a>
                </li>
                <li id="menu-item-39550" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39550">
                    <a href="https://www.homage.com.my/services/home-nursing/">Private Nurses in Malaysia</a>
                </li>
                <li id="menu-item-39549" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39549">
                    <a href="https://www.homage.com.my/services/medical-escort/">Medical Escort &amp; Transport</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="footer__category">
            <div class="menuContainer">
                <div class="categoryHeading__container">
                <span class="icon icon-therapy"></span>
                <span class="categoryHeading">Home Therapy</span>
                </div>
                <ul class="menu">
                <li id="menu-item-39663" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39663">
                    <a href="https://www.homage.com.my/services/home-therapy/">Home Therapy in Malaysia</a>
                </li>
                <li id="menu-item-39562" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39562">
                    <a href="https://www.homage.com.my/services/physiotherapy/">Physiotherapy Malaysia</a>
                </li>
                <li id="menu-item-39563" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39563">
                    <a href="https://www.homage.com.my/services/speech-therapy/">Speech Therapy Malaysia</a>
                </li>
                <li id="menu-item-39564" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39564">
                    <a href="https://www.homage.com.my/services/occupational-therapy/">Occupational Therapy Malaysia</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="footer__category">
            <div class="menuContainer">
                <div class="categoryHeading__container">
                <span class="icon icon-location-based-care"></span>
                <span class="categoryHeading">Location-Based Care</span>
                </div>
                <ul class="menu">
                <li id="menu-item-39556" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39556">
                    <a href="https://www.homage.com.my/services/home-care/kl-selangor/">KL &amp; Selangor</a>
                </li>
                <li id="menu-item-39675" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39675">
                    <a href="https://www.homage.com.my/services/home-care/penang/">Penang</a>
                </li>
                <li id="menu-item-39676" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39676">
                    <a href="https://www.homage.com.my/services/home-care/johor/">Johor</a>
                </li>
                <li id="menu-item-41475" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41475">
                    <a href="https://www.homage.com.my/services/home-care-ipoh/">Ipoh</a>
                </li>
                <li id="menu-item-42581" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-42581">
                    <a href="https://www.homage.com.my/services/home-care-kota-kinabalu/">Kota Kinabalu</a>
                </li>
                <li id="menu-item-42582" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-42582">
                    <a href="https://www.homage.com.my/services/home-care-kuching/">Kuching</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="footer__category">
            <div class="menuContainer">
                <div class="categoryHeading__container">
                <span class="icon icon-specialised-care"></span>
                <span class="categoryHeading">Specialised Care</span>
                </div>
                <ul class="menu">
                <li id="menu-item-39572" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39572">
                    <a href="https://www.homage.com.my/services/dementia-care/">Dementia Care</a>
                </li>
                <li id="menu-item-39573" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39573">
                    <a href="https://www.homage.com.my/services/stroke-rehabilitation/">Post-Stroke Care</a>
                </li>
                <li id="menu-item-39570" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39570">
                    <a href="https://www.homage.com.my/services/diabetes-care/">Diabetes Care</a>
                </li>
                <li id="menu-item-39574" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39574">
                    <a href="https://www.homage.com.my/services/parkinsons-care/">Parkinson’s Care</a>
                </li>
                <li id="menu-item-39575" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39575">
                    <a href="https://www.homage.com.my/services/cancer-care/">Cancer Care</a>
                </li>
                <li id="menu-item-39632" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39632">
                    <a href="https://www.homage.com.my/services/post-hospitalisation/">Post-Surgery Care</a>
                </li>
                <li id="menu-item-39970" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39970">
                    <a href="https://www.homage.com.my/services/palliative-care/">Palliative Care</a>
                </li>
                <li id="menu-item-39971" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39971">
                    <a href="https://www.homage.com.my/services/end-of-life-care/">End-of-life Care</a>
                </li>
                </ul>
            </div>
            </div>
            <div class="footer__category">
            <div class="menuContainer">
                <div class="categoryHeading__container">
                <span class="icon icon-resources"></span>
                <span class="categoryHeading">Resources</span>
                </div>
                <ul class="menu">
                <li id="menu-item-39652" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39652">
                    <a href="https://www.homage.com.my/resources/category/perspectives/">Perspectives</a>
                </li>
                <li id="menu-item-39630" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39630">
                    <a href="https://www.homage.com.my/resources/category/caregiving-support/">Caregiving Support</a>
                </li>
                <li id="menu-item-39651" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39651">
                    <a href="https://www.homage.com.my/resources/category/health-facilities/">Health Facilities</a>
                </li>
                <li id="menu-item-39576" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39576">
                    <a href="https://www.homage.com.my/resources/category/costs-financing/">Cost Financing</a>
                </li>
                <li id="menu-item-39631" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-39631">
                    <a href="https://www.homage.com.my/resources/category/pressroom/">Pressroom</a>
                </li>
                </ul>
            </div>
            </div>
        </div>
        <div class="categories__divider"></div>
        </div>
    </div>
    </div>
</section>

@endsection
