@extends('layout.app')

@section('contain')

 @push('seo')
     @include('layout.include.seo.sub-category')
     @endpush


    <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{empty($products[0]->sub_category->image)? asset('images/defult/productspage.jpg') :asset($products[0]->sub_category->image)}})">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <div class="uk-container uk-container-xlarge">
                    <h1 class="uk-margin-remove-top page-head__title"> {{translateview('sub category')}} {{ translation($products[0]->sub_category->name)  }}</h1>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="{{route('index')}}">{{translate('home')}}</a></li>
                            <li><a href="{{route('category',$products[0]->sub_category->category->slug)}}"> {{translation($products[0]->sub_category->category->name)}} </a></li>
                            <li><span>{{translate('products')}}</span></li>
                        </ul>
                    </div>
@include('layout.include.component.search')
                </div>
            </div>
        </div>
    </div>
    <div class="page-content">
        <div class="uk-section-large uk-container uk-container-xlarge">
            <div class="uk-grid" data-uk-grid>


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
                                        <li> {{translate('Machine_id')}} :{{ empty($product->product_detail->Machine_id)? translate('nothing'):$product->product_detail->Machine_id}}</li>
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

                @include('layout.include.component.sidemenu')

            </div>
        </div>
    </div>


 @include('layout.include.component.section-cta')
    </main>



@endsection