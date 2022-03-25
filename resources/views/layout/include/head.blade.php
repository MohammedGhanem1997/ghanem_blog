

<head>

    @stack('seo')

    <link rel="stylesheet" href="{{asset('css/main/language.css')}}">

<link rel="apple-touch-icon" sizes="180x180" href="{{asset(\App\Models\SiteControl::first()->logo) }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset(\App\Models\SiteControl::first()->logo) }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset(\App\Models\SiteControl::first()->logo) }}">
<link rel="manifest" href="{{asset('images/main/favicon/site.webmanifest')}} ">
<link rel="stylesheet" href="{{asset('css/main/libs.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/main/main.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @if (Session::has('locale'))


        @if ( Session::get('locale')== 'ar' )
            <link rel="stylesheet" href="{{asset('css/main/mainrtl.css')}}">


                @endif

                @else
                    <link rel="stylesheet" href="{{asset('css/main/mainrtl.css')}}">

                    @endif



</head>
