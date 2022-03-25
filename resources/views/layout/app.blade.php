
<!DOCTYPE html>



@if (Session::has('locale'))


    @if ( Session::get('locale')== 'ar' )
        <html  lang="ar" dir="rtl"    >

        @else
            <html  lang="en"  dir="ltr"  >

        @endif

        @else
            <html  lang="ar"  dir="rtl"  >
    @endif


    @include('layout.include.head')


    <body class="page-home" >
    <!-- Insert this script at the bottom of the HTML, but before you use any Firebase services -->



    <!--/Loader-->

    @include('layout.include.navbar')
    <br>
    <div class="page-wrapper">
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
    @endif
        @yield('contain')
        @include('layout.include.footer')
