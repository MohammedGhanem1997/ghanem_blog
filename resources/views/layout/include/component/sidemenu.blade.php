<div class="uk-width-1-3@m">
    <aside class="sidebar">
        <div class="widjet widjet-search">
        </div>
        <div class="widjet widjet-category">
            <h4 class="widjet__title">{{translate('main categories')}}</h4>
            <ul class="list-category">
                @foreach(\App\Models\MainCategory::where('status',1)->get() as $category)





                        <li> <a href="#!">{{Str::limit(translation($category->name) , 20, $end='....')}}</a></li>

                @endforeach
            </ul>
        </div>
        <div class="widjet widjet-list-articles">
            <h4 class="widjet__title"> {{translateview('top articles')}}</h4>
            <ul class="list-articles">

                @foreach(\App\Models\Blog::where('status',1)->orderBy('seen', 'DESC')->limit(4)->get() as $topseen )
                    <li class="list-articles-item"><a class="list-articles-item__link" href="#!">
                            <div class="list-articles-item__img "><img src="{{empty($topseen->image)? asset('images/defult/article.jpg') :asset($topseen->image)}}" alt="article-thumb"></div>
                            <div class="list-articles-item__info m-3">
                                <div class="list-articles-item__title">{{translation($topseen->title)}}</div>
                                <div class="list-articles-item__date">{{ empty($topseen->short_description)? '': translation($topseen->short_description)}}</div>
                            </div>
                        </a></li>
                @endforeach




            </ul>
        </div>


    </aside>
</div>
