<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="{!! translation($category->containt)  !!}" name="description">
<meta content="{{\App\Models\SiteControl::first()->site_name['ar']}} {{\App\Models\SiteControl::first()->site_name['en']}}" name="author">

<!-- Favicon -->
<link rel="icon"  href="{{empty($category->image)? asset('images/defult/productspage.jpg') :asset($category->image)}}"  type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="{{empty($category->image)? asset('images/defult/productspage.jpg') :asset($category->image)}}" />

<!-- Title -->
<title>{{translate('category')}} | {{ translation($category->name) }} </title>
