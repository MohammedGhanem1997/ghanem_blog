<div class="page-head__form">
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
