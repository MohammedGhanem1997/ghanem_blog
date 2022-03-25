@extends('layout.app')

@section('contain')

    @push('seo')
@include('layout.include.SEO.article')
    @endpush

    <main class="page-main">
        <div class="page-head">
            <div class="page-head__bg" style="background-image: url( {{asset($article->category->image) }})">
                <div class="page-head__content" data-uk-parallax="y: 0, 100">
                    <div class="uk-container">
                        <div class="header-icons"></div>
                        <h1 class="page-head__title"> {{ Str::limit(translation($article->title) , 40, $end='....')}}</h1>
                        <div class="page-head__breadcrumb">
                            <ul class="uk-breadcrumb">
                                <li><a href="{{route('index')}}">{{translate('home')}}</a></li>

                                <li><a href="{{route('category',$article->main_category_id)}}">{{translate('blog')}}</a></li>



                                <li><span>  {{ Str::limit(translation($article->title) , 30, $end='....')}} </span></li>
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
                        <article class="article-full">
                            <div class="article-full__image" data-uk-lightbox><a href="{{asset($article->image) }}"><img src="{{asset($article->image) }}" alt=""></a>
                                <div class="article-full__category">{!! translation($article->title) !!}</div>
                            </div>
                            <h1 class="article-full__title"> {!! translation($article->short_description) !!}</h1>
                            <div class="article-full__info">
                                <div class="article-full__date"><i class="fas fa-calendar-alt"></i><span>{{$article->created_at->diffForHumans()}}</span></div>
                                <div class="article-full__author"><i class="fab fa-facebook"></i><span> </span><a href="https://www.facebook.com/sharer.php?u={{url()->current()}}" target="_blank">{{translate('share')}}</a></div>

                                <div class="article-full__comments"><i class="fab fa-whatsapp"></i><a href="https://api.whatsapp.com/send?text={{url()->current()}}" target="_blank" >{{translate('share')}}</a></div>
                            </div>
                            <div class="article-full__content">
                                {!! translation($article->containt) !!}
                               </div>



                            <div class="page-head__form"></div>
                            <div class="section-title">
                                <div class="uk-h2">{{translate('Comments')}} ({{$article->comments->count()}})</div>
                            </div>
                            <div class="section-content">
                                @foreach($article->comments as $comment)
                                <article class="uk-comment">
                                    <header class="uk-comment-header">
                                        <div class="uk-grid-medium uk-grid" data-uk-grid="">
                                            <div class="uk-width-auto@s uk-first-column"> <i class="fas fa-user-circle-o"></i></div>
                                            <div class="uk-width-expand@s">
                                                <div class="uk-flex uk-flex-between uk-margin-small-bottom">
                                                    <div>
                                                        <h6 class="uk-comment-title uk-margin-remove">{{$comment->name}}</h6><span class="uk-text-meta">{{$comment->created_at->diffForHumans()}}</span>
                                                    </div>
{{--                                                    <div> <a class="link-more" href="#!"><span>Reply</span><img src="./assets/img/icons/arrow.svg" alt="arrow" data-uk-svg=""></a></div>--}}
                                                </div>
                                                <div class="uk-comment-body">
                                                    <p>{{$comment->comment}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </header>
                                </article>
                                <hr class="uk-margin-medium">
                                @endforeach

                                <div class="block-form">
                                    <div class="section-title">
                                        <div class="uk-h2">{{translateview('Leave a Reply')}} </div>
                                    </div>
                                    <div class="section-content">
                                        <p>{{translateview('Your email address will not be published. Required fields are marked with *')}}</p>
                                        <form action="{{route('comment.store')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="article_id" value="{{$article->id}}" >
                                            <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid="">
                                                <div class="uk-first-column"><input name="name" class="uk-input uk-form-large" type="text" placeholder="{{translate('name')}} *"></div>
                                                <div><input class="uk-input uk-form-large" name="email" type="text" placeholder="{{translate('email')}} *"></div>
                                                <div class="uk-width-1-1 uk-grid-margin uk-first-column"><textarea name="comment" class="uk-textarea uk-form-large" placeholder="{{translateview('Comment')}} "></textarea></div>
                                                <div class="uk-grid-margin uk-first-column"><button class="uk-button uk-button-large" type="submit"> <span> {{translateview('Post comment')}}</span><img src="{{asset('images/main/icons/arrow.svg')}}" alt="arrow" data-uk-svg=""></button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </article>
                    </div>
                    @include('layout.include.component.sidemenu')

                </div>
            </div>



        </div>






        <div class="uk-width-2-3@l">

            <div class="section-title">
                <div class="uk-h2"> {{translate('Related Posts')}}</div>
            </div>





            <div class="uk-grid uk-grid-medium uk-child-width-1-2@m uk-child-width-1-2@s" data-uk-grid="">
                @foreach(\App\Models\Blog::inRandomOrder()->limit(2)->get() as $artical)

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



        </div>





    </main>


@endsection
