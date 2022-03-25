@extends('layout.app')

@section('contain')

    @push('seo')

    @endpush

    <main class="page-main">
        <div class="page-head">
            <div class="page-head__bg" style="background-image: url({{ asset('images/defult/maincategory.jpg')}})">
                <div class="page-head__content" data-uk-parallax="y: 0, 100">
                    <div class="uk-container">
                        <div class="header-icons"><span></span><span></span><span></span></div>
                        <h1 class="page-head__title"> {{translate('partner')}}</h1>
                        <div class="page-head__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="{{route('index')}}">{{translate('home')}}</a></li>




                                <li><span> {{translate('partner')}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">
            <div class="uk-section-large uk-container">
                <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                    @foreach(\App\Models\Partener::all() as $category)
                        <div>
                            <div class="category-item"> <a class="category-item__link uk-inline-clip uk-transition-toggle" href="#" tabindex="0">
                                    <div class="category-item__media"><img class="partner" src="{{ empty($category->image)? asset('images/defult/maincategory.jpg') :  asset($category->image)}}" alt="Excavators" />
                                        <div class="uk-transition-fade">
                                            <div class="uk-overlay-primary uk-position-cover"> {{translation($category->title)}} </div>
                                            <div class="uk-position-center"><span data-uk-icon="icon: plus; ratio: 2"></span></div>
                                        </div>
                                    </div>
                                </a></div>
                        </div>

                    @endforeach



                </div>
            </div>
        </div>
        </div>


    </main>


@endsection
