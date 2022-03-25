<footer class="page-footer">
    <div class="uk-container uk-container-large">
        <div class="page-footer-top">
            <div class="logo"><a class="logo__link" href=""><img class="logo__img" src="{{asset(\App\Models\SiteControl::first()->logo) }}" alt="logo"></a></div>
            <div class="subscription-block">
                <div class="subscription-block__title">

                </div>
                <div class="subscription-block__form">

                </div>
            </div>
        </div>
        <div class="page-footer-middle">
            <div class="uk-grid uk-child-width-1-4@l uk-child-width-1-2@s" data-uk-grid>
                <div class="uk-flex-first@l">
                    <div class="title">{!! translateview('about us') !!}</div>
                    <p>{!! translation(\App\Models\Footer::first()->description)   !!}</p>
                    <ul class="social-list">
                        @foreach(\App\Models\Social::all() as $social)

                            <li class="social-list__item mr-3 "style="margin-inline-end: 9px;"><a class="social-list__link" href="{{$social->url}}">
                                    <img style="border-radius: 15px" height="30px" width="30px" src="{{asset($social->icon)}}" alt="">     </a> </li>
                        @endforeach
                    </ul>
                </div><div></div>
                <div class="uk-flex-last@1">

                    <div class="title">{{translateview('Get In Touch')}}</div>
                    <ul class="contacts-list">
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="{{asset('images/main/icons/ico-phone24.svg')}}" data-uk-svg alt="For Rental Support"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label"> -</div>
                                <div class="contacts-list-item__content"> <a href="tel:{{\App\Models\SiteControl::first()->mobile}}">{{\App\Models\SiteControl::first()->mobile}}</a></div>
                            </div>
                        </li>
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="{{asset('images/main/icons/ico-timer.svg')}}" data-uk-svg alt="The Office Hours"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">The Office Hours</div>
                                <div class="contacts-list-item__content">Mon - Sat 8am to 6pm</div>
                            </div>
                        </li>
                        <li class="contacts-list-item">
                            <div class="contacts-list-item__icon"><img src="{{asset('images/main/icons/ico-mail.svg')}}" data-uk-svg alt="{{translate('email')}}"></div>
                            <div class="contacts-list-item__desc">
                                <div class="contacts-list-item__label">{{translate('email')}}</div>
                                <div class="contacts-list-item__content"> <a href="mailto:{{\App\Models\SiteControl::first()->email}}">{{\App\Models\SiteControl::first()->email}}</a></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="title"> {{translateview('Useful links')}} </div>
                    <ul class="uk-nav uk-list-disc">

                        @foreach(\App\Models\MainCategory::where('status',1)->get() as $category)

                            <li><a href=""> {{translation($category->name)}}</a>

                        @endforeach

                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div id="offcanvas" data-uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar"><button class="uk-offcanvas-close" type="button" data-uk-close=""></button>
            <div class="uk-margin">
                <div class="logo"><a class="logo__link" href="index.html"><img class="logo__img" src="{{asset('images/main/logo-white.png')}} " alt="logo"></a></div>
            </div>
            <div class="uk-margin">
                <ul class="uk-nav-default uk-nav-parent-icon" data-uk-nav>
                    <li class="uk-active"><a href="index.html">Home</a></li>
                    <li class="uk-parent"><a href="page-categories-1.html">Equipments</a>
                        <ul class="uk-nav-sub">
                            <li><a href="page-categories-1.html">Page categories 1</a></li>
                            <li><a href="page-categories-2.html">Page categories 2</a></li>
                        </ul>
                    </li>
                    <li class="uk-parent"><a href="page-rental.html">Rental Deals</a>
                        <ul class="uk-nav-sub">
                            <li><a href="page-rental.html">Excavators</a></li>
                            <li><a href="page-rental.html">Scissor Lift</a></li>
                            <li><a href="page-rental.html">Forklift / Boomlift</a></li>
                            <li><a href="page-rental.html">Compaction Roller</a></li>
                        </ul>
                    </li>
                    <li><a href="page-categories-2.html">About</a></li>
                    <li class="uk-parent"><a href="#">News</a>
                        <ul class="uk-nav-sub">
                            <li><a href="page-blog-grid.html">Page blog grid</a></li>
                            <li><a href="page-blog-list.html">Page blog list</a></li>
                            <li><a href="page-blog-article.html">Page blog article</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contacts.html">Contact</a></li>
                </ul>
            </div>
            <div class="uk-margin">
                <div class="support"> <a class="support__link" href="tel:236-799-5500">
                        <div class="support__icon"><i class="fas fa-headset"></i></div>
                        <div class="support__desc">
                            <div class="support__label">Get Quick Support</div>
                            <div class="support__phone">236-799-5500</div>
                        </div>
                    </a></div>
            </div>
            <div class="uk-margin">
                <div class="social">
                    <ul class="social-list">
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        <li class="social-list__item"><a class="social-list__link" href="#!"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="uk-flex-top" id="callback" data-uk-modal="">
        <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical"><button class="uk-modal-close-default" type="button" data-uk-close=""></button>
            <p>.</p>
        </div>
    </div>


</footer>
</div>
<script src="{{asset('js/main/libs.js')}}"></script>
<script src="{{asset('js/main/main.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="{{asset('js/main/brand.js')}}"></script>
<script src= {{ asset('js/jquery-3.2.1.min.js') }}></script>

<script src="{{asset('js/main/search.js')}}"></script>

</body>



</body>

</html>
