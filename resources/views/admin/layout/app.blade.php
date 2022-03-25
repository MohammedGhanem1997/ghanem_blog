
<!DOCTYPE html>
@if (Session::has('locale'))


    @if ( Session::get('locale')== 'ar' )
    <html  lang="ar" dir="rtl"    >

    @else
    @endif
        <html  lang="en"  dir="ltr"  >

        @else
            <html  lang="en"  dir="ltr"  >
        @endif

        @include('admin.layout.include.head')
            <body>
            <!-- Insert this script at the bottom of the HTML, but before you use any Firebase services -->






            @include('admin.layout.include.sidebar')

        @include('admin.layout.include.alertmsg')

        <div id="global-loader">
            <img src="{{asset('images/loader.svg')}}" class="loader-img" alt="">
        </div>
        <!--/Loader-->

        @include('admin.layout.include.navbar')
        <br>
    @include('admin.layout.include.alertmsg')
        @yield('contain')
        @include('admin.layout.include.footer')

