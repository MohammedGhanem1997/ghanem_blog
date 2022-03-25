@extends('layout.app')

@section('contain')

    @push('seo')

    @endpush

    <main class="page-main">
        <div class="page-head">
            <div class="page-head__bg" style="background-image: url( {{asset('images/defult/news.jpg') }})">
                <div class="page-head__content" data-uk-parallax="y: 0, 100">
                    <div class="uk-container">
                        <div class="header-icons"><span></span><span></span><span></span></div>
                        <h1 class="page-head__title"> {{translate('news')}}</h1>
                        <div class="page-head__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="{{route('index')}}">{{translate('home')}}</a></li>




                                <li><span>{{translate('news')}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-content">


                <div class="uk-section-large uk-container">
                    <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>




                    @foreach($news as $artical)

                        <div>
                            <div class="blog-item">
                                <div class="blog-item__media"><a href="{{route('article-show',$artical->slug)}}"><img src=" {{ empty($artical->image)? asset('images/main/blog-9.jpg') : asset($artical->image)}}" alt="Generator Components Which You Should Know"></a>
                                    <div class="blog-item__category"></div>
                                </div>
                                <div class="blog-item__body">
                                    <div class="blog-item__info">
                                        <div class="blog-item__date">{{$artical->created_at}}</div>

                                    </div>
                                    <div class="blog-item__title">{{translation($artical->title)}} </div>
                                    <div class="blog-item__intro">{{translation($artical->short_description)}}  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                </div>
            </div>

        @include('layout.include.component.section-cta')

    </main>


@endsection
