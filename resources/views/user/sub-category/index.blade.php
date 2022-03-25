@extends('layout.app')

@section('contain')

    @push('seo')
        @include('layout.include.seo.sub-category')
    @endpush


    <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{empty($products[0]->sub_category->image)? asset('images/defult/productspage.jpg') :asset($products[0]->sub_category->image)}})">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <h1 class="uk-container uk-container-xlarge">
                    <h1 class="uk-margin-remove-top page-head__title"> {{translateview('sub category')}} {{ translation($products[0]->sub_category->name)  }}</h1>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="{{route('index')}}">{{translate('home')}}</a></li>
                            <li><a href="{{route('sub-categories')}}">{{translate('home')}}</a></li>
                            <li><span>{{translate('products')}}</span></li>
                        </ul>
                </h1>
                @include('layout.include.component.search')
            </div>
        </div>
    </div>
    </div>
    <div class="page-content">
        <div class="uk-section-large uk-container uk-container-xlarge">
            <div class="uk-grid" data-uk-grid>
                <div class="uk-width-1-3@l">
                    <div class="uk-hidden@l uk-margin-small-bottom"><button class="js-more-filter uk-button uk-button-large uk-width-1-1" type="button"><span>Filters </span><i class="fas fa-sliders-h"></i></button></div>
                    <aside class="js-filter-content sidebar">
                        <div class="widjet widjet-category">
                            <h4 class="widjet__title">{{translate('main categories')}}</h4>
                            <ul class="list-category">
                                @foreach(\App\Models\MainCategory::where('status',1)->get() as $category)

                                    <details open='true'>
                                        <summary>{{translation($category->name)}}</summary>

                                        @foreach(\App\Models\SubCategory::where('status',1)->where('main_category_id',$category->id)->get() as $subcategory)
                                            <li><a href="{{route('sub-category-products',$subcategory->slug)}}">{{translation($subcategory->name)}}</a></li>
                                        @endforeach
                                    </details>

                                @endforeach
                            </ul>
                        </div>



                    </aside>
                </div>
                <div class="uk-width-2-3@l">



                    @foreach($products as $product)
                        <div class="rental-item">
                            <div class="rental-item__media"> <img src="{{ count($product->product_images) == 0?  asset('images/main/rental-item-5.jpg' ): asset($product->product_images[0]->image)}}" alt="Special Attachment Excavator">
                                <div class="rental-item__links"> <a href="#">{{translate('view main category')}}</a><a href="#">{{translate('Print product')}}</a></div>
                            </div>
                            <div class="rental-item__desc">
                                <div class="rental-item__title">{{translation( $product->name)}}</div>

                                <div class="rental-item__price-delivery"> <span> {{empty($product->product_detail->short_description)? translate('nothing'):translation($product->product_detail->short_description) }} </span></div>
                                <div class="rental-item__specifications">
                                    <ul class="uk-list uk-list-disc uk-column-1-2@xl uk-column-1-2@s">
                                        <li>{{translate('brand')}}: {{ empty($product->product_detail->brand)? translate('nothing'):$product->product_detail->brand}}</li>
                                        <li>{{translate('Manufacture Year')}}: {{ empty($product->product_detail->Year)? translate('nothing'):$product->product_detail->Year}}</li>
                                        <li>Digging Depth: 4.3 Meter</li>
                                        <li>{{translate('Model')}} : {{ empty($product->product_detail->Model)? translate('nothing'):$product->product_detail->Model}}</li>
                                        <li>{{translate('Hours')}}: {{ empty($product->product_detail->Hours)? translate('nothing'):$product->product_detail->Hours}}</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="rental-item__price">
                                <div class="rental-item__price-box">
                                    <div class="rental-item__price-title"><strong>{{translate('price')}} </strong><span>$</span></div>
                                    <div class="rental-item__price-current">{{ empty($product->product_detail->price)? translate('nothing'):$product->product_detail->price}}</div>
                                    <div class="rental-item__price-old"> </div>
                                </div>
                                <div class="rental-item__price-btn"><a class="uk-button uk-button-secondary uk-button-large" href="{{route('product',$product->slug)}}">{{translate('veiw')}}</a></div>
                            </div>
                        </div>
                    @endforeach

                    <div class="d-flex justify-content-center">
                        {!! $products->links('vendor.pagination.custom') !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section-cta">
        <div class="uk-container-expand">
            <div class="section-cta__box">
                <div class="section-cta__img"><img src="{{asset('images/main/img-cta.png')}}" alt=""></div>
                <div class="section-cta__title"> <span>We Help Industry To Utilize The<br> Heavy Equipment Work Better</span></div>
                <div class="section-cta__support">
                    <div class="support"> <a class="support__link" href="tel:236-799-5500">
                            <div class="support__icon"><i class="fas fa-headset"></i></div>
                            <div class="support__desc">
                                <div class="support__label">Get Quick Support</div>
                                <div class="support__phone">236-799-5500</div>
                            </div>
                        </a></div>
                </div>
                <div class="section-cta__btn"><a class="uk-button uk-button-danger uk-button-large"><span>Get started</span><img src="{{asset('images/main/icons/arrow.svg')}}" alt="arrow" data-uk-svg></a></div>
            </div>
        </div>
    </div>
    </main>



@endsection