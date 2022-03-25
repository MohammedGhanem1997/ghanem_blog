<meta charset="UTF-8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="{!! translation($article->short_description) !!}" name="description">
<meta content="{{translation(\App\Models\SiteControl::first()->site_name) }}" name="author">
<meta name="keywords" content="@foreach(\App\Models\Blog::all() as $blog) {{translation($blog->title)}} , @endforeach "/>

<!-- Favicon -->
<link rel="icon" href={{asset($article->image) }} type="image/x-icon"/>
<link rel="shortcut icon" type="image/x-icon" href={{asset($article->image) }} />

<!-- Title -->
<title>{{translation($article->title)}} |{{translation($article->title)}}</title>
