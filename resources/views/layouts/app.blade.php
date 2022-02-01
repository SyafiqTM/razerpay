<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8" />
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Syafiq" />
    <meta name="Version" content="v1.0.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="locale" content="{{ config('app.locale') }}">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css"/> --}}
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css" integrity="sha256-f6fW47QDm1m01HIep+UjpCpNwLVkBYKd+fhpb4VQ+gE=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link href="{{ asset('css/style.css?version=1.01') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/homage-icons.css?version=1.01') }}" rel="stylesheet" type="text/css"/>
    {{-- <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css"/> --}}
    <link href="{{ asset('css/taildwind-v2.1.1.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ asset('css/colors/default.css') }}" rel="stylesheet" id="color-opt">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" id="slick-theme-css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css?ver=1.8.1" media="all">
    @stack('css')
</head>
<body>
    @include('layouts.navigation')
    <div class="main">
        @yield('content')
    </div>

    @include('layouts.footer')
      {{-- <x-alert id="my-alert" role="alert">
        Uh oh!
    </x-alert> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha256-321PxS+POvbvWcIVoRZeRmf32q7fTFQJ21bXwTNWREY=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/flatpickr.ms.js') }}"></script>
    <script src="{{ asset('js/plugins.init.js') }}"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        $(document).ready(function () {
            var swiper = new Swiper(".mySwiper", {
                slidesPerView: 8,
                autoplay: true,
                autoplaySpeed: 3000,
                loop: true,
                });
            if ($(window).width() < 960) {
                $('.swiper-grid').removeClass('d-none');
            }else{
                $('.swiper-row').removeClass('d-none');
            }


        });

        $('.testimonials__slider').slick({
            infinite: true,
            slidesToShow: 2,
            slidesToScroll: 2,
            arrows: true
        });

        $(window).resize(function() {
                if ($(window).width() < 960) {
                    $('.swiper-row').addClass('d-none');
                    $('.swiper-grid').removeClass('d-none');
                }
                else {
                    $('.swiper-row').removeClass('d-none');
                    $('.swiper-grid').addClass('d-none');
                }
            });


        $('#tabs .service__menuItem a:not(:first)').addClass('inactive');
        $('.tab-pane').hide();
        $('.tab-pane:first').show();

        $('#tabs .service__menuItem a').click(function(){
            console.log('click navigation:'+ this);
            var t = $(this).attr('id');
            console.log(t);
        if($(this).hasClass('inactive')){ //this is the start of our condition
            //add all class service__menuItem as inactive
            $('#tabs .service__menuItem a').removeClass('active');
            $('#tabs .service__menuItem a').addClass('inactive');
            //add active class to current service__menuItem
            $(this).removeClass('inactive');
            $(this).addClass('active');

            $('.tab-pane').hide();
            $('#'+ t + '-tab').fadeIn();
            console.log($('#'+ t + '-tab'));
        }
        });


    </script>
    {{-- <script src="{{asset('js/custom.js')}}"></script> --}}
    @stack('js')
</body>
</html>
