<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
@foreach(\App\Models\SEO::where('table','home')->get() as $item)
    <meta content="{{$item->description}}" name="{{$item->meta}}">

@endforeach



<title> {{ translation(\App\Models\SiteControl::first()->site_name) }} | {{translate('home')}} </title>
