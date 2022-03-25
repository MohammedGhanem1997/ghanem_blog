@extends('layout.app')

@section('contain')
    @push('seo')
        @include('layout.include.SEO.home')
    @endpush
    <main class="page-main">
    @include('layout.include.slider')




            <div class="page-content">
                <div class="uk-section-large uk-container">
                    <div class="uk-grid" data-uk-grid>
                        <div class="uk-width-2-3@m">


                            @foreach($blog as $article)
                            <article class="article-intro">
                                <div class="article-intro__image">
                                    <div  data-attrs="width: 1280; height: 720;"><img src="{{ asset($article->image)}}" alt="img-article"></div>
                                    <div class="article-intro__category">{{translation($article->category->name) }}</div>
                                </div>
                                <h1 class="article-intro__title">{{translation($article->title) }}</h1>
                                <div class="article-intro__info">
                                    <div class="article-intro__date"><i class="fas fa-calendar-alt"></i><span>{{$article->created_at->diffForHumans()}}</span></div>
                                    <div class="article-intro__author"><i class="fas fa-user"></i><span> {{translate('By')}} </span><a href="#!">-</a></div>
                                    <div class="article-intro__comments"><i class="fas fa-comment"></i><a href="#" data-uk-scroll="offset: 120">{{translateview('Comment')}} {{$article->comments_count}}  </a></div>
                                    <div class="article-intro__comments"><i class="fas fa-eye"></i><a href="#" data-uk-scroll="offset: 120">{{translate('visitor')}} {{$article->seen}}  </a></div>
                                    <br>
                                    <div class="article-intro__share"><i class="fas fa-share-alt"></i><a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank" data-uk-scroll="offset: 120">{{translate('share')}} </a></div>
                                </div>
                                <div class="article-intro__content">
                                    <p>{{translation($article->short_description) }}</p>
                                </div>
                                <div class="article-intro__more"><a class="uk-button uk-button-default uk-button-large" href="/page-blog-article.html"><span>{{translateview('reed more')}} </span><img src="{{asset('images/main/icons/arrow.svg')}} " alt="arrow" data-uk-svg></a></div>
                            </article>
                            @endforeach

                            <ul class="uk-pagination uk-flex-center uk-margin-large-top">

                                {!! $blog->links('vendor.pagination.custom') !!}
                            </ul>
                        </div>

                   @include('layout.include.component.sidemenu')
                </div>

                    <div class="section-title">
                        <div class="uk-h2">{{translateview('top articles')}} </div>
                    </div>
                    <div class="uk-grid uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid="">
                        @foreach( $top as $artical)

                            @if($loop->index%3==0)
                                <div class="uk-first-column">
                                    <div class="blog-item">
                                        <div class="blog-item__media"><a href="#!"><img src="{{asset($artical->image)}}" alt="Generator Components Which You Should Know"></a>
                                            <div class="blog-item__category">{{ translation($artical->category->name) }}</div>
                                        </div>
                                        <div class="blog-item__body">
                                            <div class="blog-item__info">
                                                <div class="blog-item__date">{{$artical->created_at->diffForHumans()}}</div>
                                                <div class="blog-item__author">{{translate('by')}}  <a href="#!">-</a></div>
                                                <div class="article-intro__comments"><a href="#" data-uk-scroll="offset: 120">{{translateview('Comment')}} {{$article->comments_count}}  </a></div>

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
                                            <div class="blog-item__category">{{ translation($artical->category->name) }}</div>
                                        </div>
                                        <div class="blog-item__body">
                                            <div class="blog-item__info">
                                                <div class="blog-item__date">{{$artical->created_at->diffForHumans()}}</div>
                                                <div class="blog-item__author">{{translate('by')}}  <a href="#!">-</a></div>
                                                <div class="article-intro__comments"><a href="#" data-uk-scroll="offset: 120">{{translateview('Comment')}} {{$article->comments_count}}  </a></div>

                                            </div>
                                            <div class="blog-item__title">{{translation($artical->title) }}</div>
                                            <div class="blog-item__intro">{{translation($artical->short_description)}}</div>
                                        </div>
                                        <div class="blog-item__bottom"> <a class="link-more" href="{{route('article.show',$artical->slug)}}"><span> {{translateview('reed more')}} </span><img src=" {{asset('images/main/icons/arrow.svg')}}" alt="arrow" data-uk-svg=""></a></div>
                                    </div>
                                </div>

                            @endif


                        @endforeach

                        </div>

                    <div class="d-flex justify-content-center">
                        {!! $top->links('vendor.pagination.custom') !!}
                    </div>

                    </div>

            </div>









@endsection
