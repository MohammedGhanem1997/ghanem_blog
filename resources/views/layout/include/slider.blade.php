<div class="section-slideshow">
    <div class="uk-position-relative uk-light" tabindex="-1" data-uk-slideshow="animation: fade; min-height: 400; max-height: 700;">
        <ul class="uk-slideshow-items">
            @foreach( \App\Models\Slider::where('visible',1)->get() as $slider )

            <li class="slideshow-item"><img src="{{$slider->image}}" alt data-uk-cover>
                <div class="slideshow-item__content">
                    <div class="uk-position-center uk-position-small uk-text-center">
                        <div class="header-icons" data-uk-slideshow-parallax="x: -200,200"></div>
                        <p class="slideshow-item__desc" data-uk-slideshow-parallax="x: 200,-200">{{translation($slider->title) }}</p>
                        <h2 class="slideshow-item__title" data-uk-slideshow-parallax="x: -300,300"> {{Str::limit(translation($slider->description) , 40, $end='')}} </h2>
                    </div>
                </div>
            </li>

                @endforeach
        </ul>
        <div class="uk-visible@m"><a class="uk-position-center-left uk-position-small" href="#" data-uk-slidenav-previous data-uk-slideshow-item="previous"></a><a class="uk-position-center-right uk-position-small" href="#" data-uk-slidenav-next data-uk-slideshow-item="next"></a></div>
    </div>
</div>
<div class="section-find">
    <div class="uk-container">
        <div class="find-box">
            <div class="find-box__title"> <span> {{translateview('Find The Right Articles')}}</span></div>
            <div class="find-box__form">
                <form action="{{route('article.search.show')}}">
                    <div class="uk-grid uk-grid-medium uk-flex-middle uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                        <div>
                            <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><i class="fas fa-tags"></i></span>
                                <select  class="uk-select uk-form-large main-categories" name="category">
                                    <option >{{translate('Main Categories')}}</option>

                                @foreach(\App\Models\MainCategory::where('status',1)->get() as $category)

                                    <option  value="{{$category->id}}">{{translation($category->name)}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div>
                            <div class="uk-inline uk-width-1-1"><span class="uk-form-icon"><i class="fas fa-blog"></i></span>
                                <select class="uk-select uk-form-large" name="slug">
                                    @foreach(\App\Models\Blog::where('status',1)->get() as $article)

                                        <option  class="sub-categories{{$article->main_category_id}}  sub-categories" id="main{{$article->id}}"  value="{{$article->slug}}">{{translation($article->title)}}</option>
                                    @endforeach
                                </select>                            </div>
                        </div>

                        <div><button class="uk-button uk-button-secondary uk-button-large uk-width-1-1" type="submit"><span>{{translateview('find article')}}</span><i class="fas fa-search"></i></button></div>

                        <div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
