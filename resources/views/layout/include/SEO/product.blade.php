<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="   {!! empty($product->product_detail->contain)? '': translation($product->product_detail->containt) !!}  " name="description">
<meta content="{{\App\Models\SiteControl::first()->site_name['ar']}} {{\App\Models\SiteControl::first()->site_name['en']}}" name="author">
<meta name="keywords" content=" @foreach(\App\Models\Product::all() as $product)  {{$product->name['ar']}} , {{$product->name['en']}} , @endforeach"/>

<!-- Favicon -->
<link rel="icon"  href="{{empty($product->product_images[0])? asset('images/defult/productspage.jpg') :asset($product->product_images[0]->image)}}"  type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href="{{empty($product->product_images[0])? asset('images/defult/productspage.jpg') :asset($product->product_images[0]->image)}}" />

<!-- Title -->
<title> {{ translate('products') }}| {{ translation($product->name) }} </title>