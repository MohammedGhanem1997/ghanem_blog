<head>
	<!-- Bootstrap css -->
    <link href= {{ asset('plugins/bootstrap-4.3.1/css/bootstrap.min.css') }} rel="stylesheet" />
{{--    <link href={{ asset('plugins/select2/select2.min-rtl.css') }} rel="stylesheet" />--}}
    <link id="theme" rel="stylesheet" type="text/css" media="all" href={{ asset('color-skins/color6.css') }} />
<!-- WYSIWYG Editor css -->
<link href="{{ asset('plugins/wysiwyag/richtext.css') }}" rel="stylesheet" />
		<!-- forn-wizard css-->
<link href={{ asset('plugins/forn-wizard/css/material-bootstrap-wizard.css') }} rel="stylesheet" />
<link href={{ asset('plugins/forn-wizard/css/demo.css') }} rel="stylesheet" />

    @if (Session::has('locale'))


        @if ( Session::get('locale')== 'ar' )
            <link href= {{ asset('css-rtl/style.css') }} rel="stylesheet" />

            <link href= {{ asset('css-rtl/admin-custom.css') }} rel="stylesheet"/>
            <link href= {{ asset('css-rtl/sidemenu.css') }} rel="stylesheet"/>
            <!-- Switcher css -->
            <link  href= "{{ asset('switcher/css/switcher-rtl.css') }}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

            <link href= {{ asset('css-rtl/plugin.css') }} rel="stylesheet"/>
            <!-- Accordion Css -->
            <link href= {{ asset('/plugins/accordion/accordion.css') }} rel="stylesheet" />

            <!-- P-scroll bar css-->
            <link href="{{ asset('plugins/pscrollbar/pscrollbar.css') }}" rel="stylesheet" />
            <!---Font icons-->
            <link href={{ asset('css-rtl/icons.css') }} rel="stylesheet"/>

            <!-- file Uploads -->
            <link href= {{ asset('plugins/fileuploads/css/fileupload.css')}} rel="stylesheet" />
            <link href= {{ asset('plugins/fileuploads/css/fileupload.min.css')}} rel="stylesheet" />


            <!-- c3.js Charts Plugin -->
            <link href={{ asset('plugins/charts-c3/c3-chart.css') }} rel="stylesheet" />

            <link href={{ asset('plugins/select2/select2.min-rtl.css') }} rel="stylesheet" />
            <!-- translate -->
            <link href="{{ asset('css-rtl/translateinput.css') }}" rel="stylesheet" />

            <link id="theme" rel="stylesheet" type="text/css" media="all" href={{ asset('color-skins-rtl/color6.css') }} />

            <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>


        @else

        <!-- Dashboard Css -->
            <link href={{ asset('css/style.css') }} rel="stylesheet" />
            <link href={{ asset('css/admin-custom.css') }} rel="stylesheet" />

        <!-- Sidemenu Css -->
            <link href={{ asset('css/sidemenu.css') }} rel="stylesheet" />
<title>english</title>
            <!-- Switcher css -->
            <link  href={{ asset('switcher/css/switcher.css') }}rel="stylesheet' id="switcher-css" type="text/css" media="all"/>

            <!-- P-scroll bar css-->
            <link href={{ asset('plugins/pscrollbar/pscrollbar.css') }} rel="stylesheet" />

            <!---Font icons-->
            <link href={{ asset('css/icons.css') }} rel="stylesheet"/>


            <!-- c3.js Charts Plugin -->
            <link href={{ asset('plugins/charts-c3/c3-chart.css') }} rel="stylesheet" />


            <!-- Color Skin css -->
            <link id="theme" rel="stylesheet" type="text/css" media="all" href={{ asset('color-skins/color6.css') }} />






            <link href="{{ asset('css/translateinput.css') }}" rel="stylesheet" />
            <!-- Accordion Css -->
            <link href= {{ asset('/plugins/accordion/accordion.css') }} rel="stylesheet" />

            <!-- P-scroll bar css-->
            <link href="{{ asset('plugins/pscrollbar/pscrollbar.css') }}" rel="stylesheet" />

            <!---Font icons-->
            <link href={{ asset('css/icons.css') }} rel="stylesheet"/>

            <!-- file Uploads -->
            <link href= {{ asset('plugins/fileuploads/css/fileupload.css')}} rel="stylesheet" />
            <link href= {{ asset('plugins/fileuploads/css/fileupload.min.css')}} rel="stylesheet" />

            <!-- Color Skin css -->
            <link id="theme" rel="stylesheet" type="text/css" media="all" href={{ asset('color-skins/color6.css') }} />



            <!-- c3.js Charts Plugin -->
            <link href={{ asset('plugins/charts-c3/c3-chart.css') }} rel="stylesheet" />

            <!-- select2 Plugin -->
            <!-- translate -->
            <link href="{{ asset('css/translateinput.css') }}" rel="stylesheet" />


            <!-- select2 Plugin -->
            <link href={{ asset('plugins/select2/select2.min.css') }} rel="stylesheet" />



        @endif

    @else

        <link href= {{ asset('css-rtl/style.css') }} rel="stylesheet" />

        <link href= {{ asset('css-rtl/admin-custom.css') }} rel="stylesheet"/>
        <link href= {{ asset('css-rtl/sidemenu.css') }} rel="stylesheet"/>
        <!-- Switcher css -->
        <link  href= "{{ asset('switcher/css/switcher-rtl.css') }}" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>

        <link href= {{ asset('css-rtl/plugin.css') }} rel="stylesheet"/>
        <!-- Accordion Css -->
        <link href= {{ asset('/plugins/accordion/accordion.css') }} rel="stylesheet" />

        <!-- P-scroll bar css-->
        <link href="{{ asset('plugins/pscrollbar/pscrollbar.css') }}" rel="stylesheet" />
        <!---Font icons-->
        <link href={{ asset('css-rtl/icons.css') }} rel="stylesheet"/>

        <!-- file Uploads -->
        <link href= {{ asset('plugins/fileuploads/css/fileupload.css')}} rel="stylesheet" />
        <link href= {{ asset('plugins/fileuploads/css/fileupload.min.css')}} rel="stylesheet" />


        <!-- c3.js Charts Plugin -->
        <link href={{ asset('plugins/charts-c3/c3-chart.css') }} rel="stylesheet" />


        <!-- translate -->
        <link href="{{ asset('css-rtl/translateinput.css') }}" rel="stylesheet" />

        <link id="theme" rel="stylesheet" type="text/css" media="all" href={{ asset('color-skins-rtl/color6.css') }} />
        <!-- select2 Plugin -->
        <link href={{ asset('plugins/select2/select2.min.css') }} rel="stylesheet" />

        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>




    @endif



    <link id="theme" rel="stylesheet" type="text/css" media="all" href={{ asset('color-skins-rtl/color6.css') }} />

    <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>



    <link href={{ asset('css/image-upload.css') }} rel="stylesheet" />


{{--  Insert this script at the bottom of the HTML, but before you use any Firebase services --}}
    <script>

        var currentemail="{{Auth::guard('employee')->user()->email}}" ;
        var currentpassword="{{Auth::guard('employee')->user()->password}}";


    </script>


</head>
