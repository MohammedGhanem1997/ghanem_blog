@extends('layout.app')

@section('contain')

    @push('seo')

    @endpush

    <main class="page-main">
        <div class="page-head">
            <div class="page-head__bg" style="background-image: url({{empty($page->image)? asset('images/defult/productspage.jpg') :asset($page->image)}})">
                <div class="page-head__content" data-uk-parallax="y: 0, 100">
                    <div class="uk-container">
                        <div class="header-icons"><span></span><span></span><span></span></div>
                        <h1 class="page-head__title"> {{translation($page->name)}}</h1>
                        <div class="page-head__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="{{route('index')}}">{{translate('home')}}</a></li>




                                <li><span>{{translation($page->name)}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">

            <div class="uk-section-large uk-container uk-container-xlarge">
                <div class="uk-grid" data-uk-grid>


                    <div class="uk-width-2-3@l">

{!! translation($page->content) !!}

                    </div>

                    @include('layout.include.component.sidemenu')
                </div>
            </div>

            </div>

        @include('layout.include.component.section-cta')

    </main>


@endsection