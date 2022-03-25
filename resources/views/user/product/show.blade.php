
@extends('layout.app')

@section('contain')

    @push('seo')
        @include('layout.include.seo.product')
    @endpush
    <main class="page-main">
    <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{empty($product->sub_category->image)? asset('images/defult/productspage.jpg') :asset($product->sub_category->image)}})">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <div class="uk-container">
                    <div class="header-icons"><span></span><span></span><span></span></div>
                    <h1 class="page-head__title"> {{translation($product->name)}}</h1>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="{{route('index')}}">{{translate('home')}}</a></li>

                            <li><a href="{{route('category',$product->sub_category->category->slug)}}"> {{translation($product->sub_category->category->name)}} </a></li>
                            <li><a href="{{route('sub-category-products',$product->sub_category->slug)}}"> {{translation($product->sub_category->name)}} </a></li>

                            <li><span>{{translation($product->name)}}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="uk-section-large uk-container">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-2-3@m">


                    <article class="article-intro">
                        <div class="article-intro__image">
                            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" data-uk-slideshow>
                                <ul class="uk-slideshow-items">
                                    @if($product->product_images)
                                        @foreach($product->product_images as $image)
                                    <li><img src="{{asset($image->image)}}" alt data-uk-cover></li>
                                    @endforeach
                                        @endif
                                </ul><a class="uk-position-center-left" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a>
                            </div>
                            <div class="article-intro__category">{{ translation($product->sub_category->category->name) }}</div>
                        </div>
                        <h1 class="article-intro__title">{{   empty($product->name)? translate('nothing'): translation($product->name)}}  </h1>
                        <div class="article-intro__info">
                            <div class="article-intro__date"><i class="fas fa-calendar-alt"></i> <span> {{translate('Year')}} : </span> <span> {{ empty($product->product_detail->Year)? translate('nothing'):$product->product_detail->Year}}</span></div>
                            <div class="article-intro__author"><i class="fas fa-link"></i><span> {{translate('model')}} :</span> {{ empty($product->product_detail->Model)? translate('nothing'):$product->product_detail->Model}}</div>
                            <div class="article-intro__author"><i class="fas fa-code-branch"></i><span> {{translate('brand')}} :</span><a href="" >{{ empty($product->product_detail->brand)? translate('nothing'):$product->product_detail->brand}}</a></div>
                            <div class="article-intro__share"><i class="fas fa-hourglass-start"></i><span> {{translate('Hours')}} :</span>{{ empty($product->product_detail->Hours)? translate('nothing'):$product->product_detail->Hours}}</div>
                            <div class="article-intro__share"><i class="fas fa-tools"></i><span> {{translate('Machine_id')}} :</span>{{ empty($product->product_detail->Machine_id)? translate('nothing'):$product->product_detail->Machine_id}}</div>
                            <br>
                            <div class="article-intro__share"><i class="fas fa-money-bill-wave-alt"></i><span> {{translate('price')}} :</span>{{ empty($product->product_detail->price)? translate('nothing'):$product->product_detail->price}}</div>
                        </div>
                        <div class="article-intro__content">
                            <span>{!! empty($product->product_detail->short_description)? translate('nothing'): translation($product->product_detail->short_description) !!}</span>

                            <p> {!! empty($product->product_detail->containt)? translate('nothing'): translation($product->product_detail->containt) !!} </p>
                        </div>
                        <div class="article-intro__more"><a class="uk-button uk-button-default uk-button-large" href="../"><span>  {{translate('back')}}  </span> <span></span> <img src="{{asset('images/main/icons/arrow.svg')}}" alt="arrow" data-uk-svg></a></div>
                    </article>


                </div>
@include('layout.include.component.sidemenu')

            </div>

        </div>
    </div>
</main>

@endsection