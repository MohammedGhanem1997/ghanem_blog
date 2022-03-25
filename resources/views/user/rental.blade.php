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
                        <div class="uk-section-large uk-container">
                            <div class="contacts-block">
                                <div class="uk-grid uk-grid-collapse" data-uk-grid>
                                    <div class="uk-width-1-3@m">
                                        <div class="sidebar">
                                            <div class="widjet widjet-contacts">
                                                <h4 class="widjet__title">{{translate('contact us')}}</h4>
                                                <ul class="contacts-list">
                                                    <li class="contacts-list-item">
                                                        <div class="contacts-list-item__icon"><img src="{{asset('images/main/icons/ico-contact-1.svg')}}" data-uk-svg alt="HeadOffice Address"></div>
                                                        <div class="contacts-list-item__desc">
                                                            <div class="contacts-list-item__label">{{translate('address ')}}</div>
                                                            <div class="contacts-list-item__content">{{ translation(\App\Models\SiteControl::first()->address) }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="contacts-list-item">
                                                        <div class="contacts-list-item__icon"><img src="{{asset('images/main/icons/ico-contact-2.svg')}}" data-uk-svg alt="{{translate('For Rental Support')}} "></div>
                                                        <div class="contacts-list-item__desc">
                                                            <div class="contacts-list-item__label">{{translate('For Rental Support')}}</div>
                                                            <div class="contacts-list-item__content"><a href="tel:12367995500/6600">{{ \App\Models\SiteControl::first()->phone }}</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="contacts-list-item">
                                                        <div class="contacts-list-item__icon"><img src=" {{asset('images/main/icons/ico-contact-3.svg')}}" data-uk-svg alt="{{translate('work time')}}"></div>
                                                        <div class="contacts-list-item__desc">
                                                            <div class="contacts-list-item__label">{{translate('work time')}}</div>
                                                            <div class="contacts-list-item__content">{{ translation(\App\Models\SiteControl::first()->work_time) }}</div>
                                                        </div>
                                                    </li>
                                                    <li class="contacts-list-item">
                                                        <div class="contacts-list-item__icon"><img src="{{asset('images/main/icons/ico-contact-4.svg')}}" data-uk-svg alt="{{translate('email')}}"></div>
                                                        <div class="contacts-list-item__desc">
                                                            <div class="contacts-list-item__label"> {{translate('email')}}</div>
                                                            <div class="contacts-list-item__content"> <a href="mailto:{{ \App\Models\SiteControl::first()->email }}">{{ \App\Models\SiteControl::first()->email }}</a></div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="uk-width-2-3@m">
                                        <div class="block-form">
                                            <div class="section-title">
                                                <div class="uk-h2">{{translate('Send a Message')}}</div>
                                            </div>
                                            <div class="section-content">
                                                <p>{{ translateview('Your email address will not be published')}}</p>
                                                <form action="#!">
                                                    <div class="uk-grid uk-grid-small uk-child-width-1-2@s" data-uk-grid>
                                                        <div><input class="uk-input uk-form-large" type="text" placeholder="{{translation(lable('name'))}} *"></div>
                                                        <div><input class="uk-input uk-form-large" type="text" placeholder="{{translation(lable('mobile'))}} *"></div>
                                                        <div  class="uk-width-1-1" ><input class="uk-input uk-form-large" type="text" placeholder="{{translation(lable('email'))}} *"></div>
                                                        <div class="uk-width-1-1"><input class="uk-input uk-form-large" type="text" placeholder="{{translation(lable('title message'))}}"></div>
                                                        <div class="uk-width-1-1"><textarea class="uk-textarea uk-form-large" placeholder="{{translation(lable('containt message'))}}"></textarea></div>
                                                        <div><button class="uk-button uk-button-large" type="submit"> <span>Send message</span><img src="{{asset('images/main/icons/arrow.svg')}}" alt="arrow" data-uk-svg></button></div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="contacts-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12233.178242503007!2d-75.12062315790071!3d39.9571665186268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c8f752067afb%3A0x31a9a3edb6f9b368!2z0JrQsNC80LTQtdC9LCDQndGM0Y4t0JTQttC10YDRgdC4IDA4MTAyLCDQodCo0JA!5e0!3m2!1sru!2sua!4v1608217970812!5m2!1sru!2sua"></iframe></div>
                        </div>
                    </div>

                    @include('layout.include.component.sidemenu')
                </div>
            </div>

        </div>

        @include('layout.include.component.section-cta')

    </main>


@endsection