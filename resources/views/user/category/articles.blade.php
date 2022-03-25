@extends('layout.app')

@section('contain')

    @push('seo')
        @include('layout.include.SEO.category')
    @endpush


    <div class="page-head">
        <div class="page-head__bg" style="background-image: url({{empty($category->image)? asset('images/defult/productspage.jpg') :asset($category->image)}})">
            <div class="page-head__content" data-uk-parallax="y: 0, 100">
                <div class="uk-container uk-container-xlarge">
                    <h1 class="uk-margin-remove-top page-head__title"> {{translateview('category')}} {{ translation($category->name)  }}</h1>
                    <div class="page-head__breadcrumb">
                        <ul class="uk-breadcrumb">
                            <li><a href="{{route('index')}}">{{translate('home')}}</a></li>
                            <li><span> {{ translation($category->name)  }}</span></li>
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






                        <div class="uk-grid uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid="">
                            @foreach($articles as $artical)

                                @if($loop->index%3==0)
                                    <div class="uk-first-column">
                                        <div class="blog-item">
                                            <div class="blog-item__media"><a href="#!"><img src="{{asset($artical->image)}}" alt="Generator Components Which You Should Know"></a>
                                                <div class="blog-item__category">{{ translation($category->name) }}</div>
                                            </div>
                                            <div class="blog-item__body">
                                                <div class="blog-item__info">
                                                    <div class="blog-item__date">{{$artical->created_at->diffForHumans()}}</div>
                                                    <div class="blog-item__author">{{translate('by')}}  <a href="#!">-</a></div>
                                                </div>
                                                <div class="blog-item__title">{{translation($artical->title) }}</div>
                                                <div class="blog-item__intro">{{translation($artical->short_description)}}</div>
                                            </div>
                                            <div class="blog-item__bottom"> <a class="link-more" href="{{route('article.show',$artical->slug)}}"><span>{{translateview('reed more')}}</span><img src="{{asset('images/main/icons/arrow.svg')}}" alt="arrow" data-uk-svg=""></a></div>
                                        </div>
                                    </div>

                                @else

                                    <div class="uk-grid-margin">
                                        <div class="blog-item">
                                            <div class="blog-item__media"><a href="#!"><img src="{{asset($artical->image)}}" alt="Generator Components Which You Should Know"></a>
                                                <div class="blog-item__category">{{ translation($category->name) }}</div>
                                            </div>
                                            <div class="blog-item__body">
                                                <div class="blog-item__info">
                                                    <div class="blog-item__date">{{$artical->created_at->diffForHumans()}}</div>
                                                    <div class="blog-item__author">{{translate('by')}}  <a href="#!">-</a></div>
                                                </div>
                                                <div class="blog-item__title">{{translation($artical->title) }}</div>
                                                <div class="blog-item__intro">{{translation($artical->short_description)}}</div>
                                            </div>
                                            <div class="blog-item__bottom"> <a class="link-more" href="{{route('article.show',$artical->slug)}}"><span>{{translateview('reed more')}}</span><img src="{{asset('images/main/icons/arrow.svg')}}" alt="arrow" data-uk-svg=""></a></div>
                                        </div>
                                    </div>

                                @endif


                            @endforeach







                        </div>

                    <div class="d-flex justify-content-center">
                        {!! $articles->links('vendor.pagination.custom') !!}
                    </div>

                </div>

                @include('layout.include.component.sidemenu')

            </div>
        </div>
    </div>


    @include('layout.include.component.section-cta')
    </main>



@endsection
