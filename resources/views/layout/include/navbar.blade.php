<header class="page-header">
    <div class="page-header-top">
        <div class="page-header-top__left">
{{--            <div class="time-work icon"><i class="far fa-clock"></i><span>- </span></div>--}}
            <div class="sl-nav text-center border-light">

                <ul style="margin-inline: 200px ; border: 1px" >
                    <li><b>{{App::getLocale()=='ar'? translate('arabic'):translate('english')}}</b> <i class="fa fa-angle-down" aria-hidden="true"></i>

                        <div class="triangle"></div>
                        <ul>
                            @foreach(Config::get('app.available_locales') as $locale_name => $available_locale)
                                @if($available_locale != App::getLocale())

                                    <li> <a  href="{{route('language', $available_locale)}}"  ><i class="fas fa-flag"><div id="germany"></div></i> <span class="active">{{ $locale_name }}</span>  </a></li>

                                @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>



        <div class="page-header-top__right">










            <div class="social">
                <ul class="social-list pr-1 pl-1">
                    @foreach(\App\Models\Social::all() as $social)

                    <li class="social-list__item mr-3 "style="margin-inline-end: 9px;"><a class="social-list__link" href="{{$social->url}}">  <img style="border-radius: 10px" height="20px" width="20px" src="{{asset($social->icon)}}" alt="">   </a> </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
    <div class="page-header-bottom" data-uk-sticky>
        <div class="page-header-bottom__left">
            <div class="logo"><a class="logo__link" href="{{url('/')}}"> <img class="logo__img" src="{{ asset(\App\Models\SiteControl::first()->logo)}}" alt=""></a></div>
            <div class="support"> <a class="support__link" href="tel:236-799-5500">
                    <div class="support__icon"><i class="fas fa-headset"></i></div>
{{--                    <div class="support__desc">--}}
{{--                        <div class="support__label"> {{translateview('Get Quick Support')}}</div>--}}
{{--                        <div class="support__phone">{{\App\Models\SiteControl::first()->phone}}</div>--}}
{{--                    </div>--}}
                </a></div>
        </div>
        <div class="page-header-bottom__right">
            <nav class="uk-navbar-container uk-navbar-transparent" data-uk-navbar>
                <div class="nav-overlay uk-visible@l">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="{{url('/')}}">{{translate('Home')}}</a></li>
                        @foreach(\App\Models\MainCategory::where('status',1)->get() as $category)

                            <li><a href="{{route('category',$category->slug)}}"> {{translation($category->name)}}</a>

                                @endforeach



                        </li>



                    </ul>
                </div>
                <div class="nav-overlay search-btn"><a class="uk-navbar-toggle" data-uk-search-icon data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a></div>
                <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
                    <div class="uk-navbar-item uk-width-expand" style="width: 400px ">
                        <form class="uk-search uk-search-navbar uk-width-1-1" action="{{route('all.search')}}"><input class="uk-search-input"  name="search" type="search" placeholder="Search..." autofocus></form>
                    </div><a class="uk-navbar-toggle" data-uk-close data-uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#"></a>
                </div>
            </nav><a class="uk-navbar-toggle uk-hidden@l" href="#offcanvas" data-uk-toggle><span data-uk-icon="menu"></span></a><a class="uk-navbar-toggle cart-btn" href="#">
            </a>
        </div>
    </div>
</header>
