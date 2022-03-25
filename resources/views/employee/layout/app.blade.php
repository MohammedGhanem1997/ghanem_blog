

<!DOCTYPE html>
@if ( app()->getLocale()== 'ar' )
    <html  lang="ar" dir="rtl"    >

@else
    <html  lang="en"  dir="ltr"  >

@endif
@include('employee/layout\include\head')
@include('employee/layout\include\head')
<body>

    @yield('contain')
@include('employee/layout\include\footer')
</html>