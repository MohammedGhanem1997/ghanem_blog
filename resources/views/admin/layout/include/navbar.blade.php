


<div class="app-header1 header py-1 d-flex" >
    <div class="container-fluid">
        <div class="d-flex">
            <a class="header-brand" href="#">
               {{translation(\App\Models\SiteControl::first()->site_name)}}
            </a>
            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-toggle="sidebar" href="#"></a>
            <div class="header-navicon">
                <a href="#" data-toggle="search" class="nav-link d-lg-none navsearch-icon">
                    <i class="fa fa-search"></i>
                </a>
            </div>
            <div class="header-navsearch">
                <a href="#" class=" "></a>
                <form class="form-inline mr-auto">
                    <div class="nav-search">
                        <input type="search" class="form-control header-search" placeholder="Search…" aria-label="Search" >
                        <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="d-flex order-lg-2 mr-auto" id="nav-padding-left-40">
                <div class="dropdown d-none d-md-flex" >
                    <a  class="nav-link icon full-screen-link">
                        <i class="fe fe-maximize-2"  id="fullscreen-button"></i>
                    </a>
                </div>



                <div class="dropdown d-none d-md-flex country-selector">
                    <a href="#" class="d-flex nav-link leading-none" data-toggle="dropdown">
{{--                        <img src="{{asset('images/flags/eg.jpg')}}" alt="img" class="avatar avatar-xs ml-1 align-self-center">--}}
                        <div>
                            <strong class="text-dark">{{App::getLocale()}}</strong>
                        </div>
                    </a>
                    <div class="language-width dropdown-menu dropdown-menu-left dropdown-menu-arrow">

                    @foreach(Config::get('app.available_locales') as $locale_name => $available_locale)
                            @if($available_locale != App::getLocale())





                            <a  href="{{route('language', $available_locale)}}"  class="dropdown-item d-flex pb-3" >
{{--                                    <img src="{{asset('images/flags/eu_flag.jpg')}}" alt="img" class="avatar avatar-xs ml-1 align-self-center">--}}
                                   <div>
                                    <strong class="">{{ $locale_name }}</strong>
                                  </div>
                                </a>
                            @endif
                        @endforeach
                            </div>
                </div>

{{--                <div class="dropdown d-none d-md-flex">--}}
{{--                    <a class="nav-link icon" data-toggle="dropdown">--}}
{{--                        <i class="fa fa-bell-o"></i>--}}
{{--                        <span class=" nav-unread badge badge-danger  badge-pill">4</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">--}}
{{--                        <a href="#" class="dropdown-item text-center">You have 4 notification</a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-envelope-o"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong>2 new Messages</strong>--}}
{{--                                <div class="small text-muted">17:50 Pm</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-calendar"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong> 1 Event Soon</strong>--}}
{{--                                <div class="small text-muted">19-10-2019</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-comment-o"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong> 3 new Comments</strong>--}}
{{--                                <div class="small text-muted">05:34 Am</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <div class="notifyimg">--}}
{{--                                <i class="fa fa-exclamation-triangle"></i>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <strong> Application Error</strong>--}}
{{--                                <div class="small text-muted">13:45 Pm</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="#" class="dropdown-item text-center">See all Notification</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="dropdown d-none d-md-flex">--}}
{{--                    <a class="nav-link icon" data-toggle="dropdown">--}}
{{--                        <i class="fa fa-envelope-o"></i>--}}
{{--                        <span class=" nav-unread badge badge-warning  badge-pill">3</span>--}}
{{--                    </a>--}}
{{--                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow">--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <img src={{asset( \App\Models\SiteControl::first()->logo)}} alt="avatar-img" class="avatar brround ml-3 align-self-center">--}}
{{--                            <div>--}}
{{--                                <strong>Blake</strong> I've finished it! See you so.......--}}
{{--                                <div class="small text-muted">30 mins ago</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <img src="{{asset( \App\Models\SiteControl::first()->logo)}} " alt="avatar-img" class="avatar brround ml-3 align-self-center">--}}
{{--                            <div>--}}
{{--                                <strong>Caroline</strong> Just see the my Admin....--}}
{{--                                <div class="small text-muted">12 mins ago</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <img src={{asset( \App\Models\SiteControl::first()->logo)}} alt="avatar-img" class="avatar brround ml-3 align-self-center">--}}
{{--                            <div>--}}
{{--                                <strong>Jonathan</strong> Hi! I'am singer......--}}
{{--                                <div class="small text-muted">1 hour ago</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <a href="#" class="dropdown-item d-flex pb-3">--}}
{{--                            <img src="{{asset( \App\Models\SiteControl::first()->logo)}}" alt="avatar-img" class="avatar brround ml-3 align-self-center">--}}
{{--                            <div>--}}
{{--                                <strong>Emily</strong> Just a reminder you have.....--}}
{{--                                <div class="small text-muted">45 mins ago</div>--}}
{{--                            </div>--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-divider"></div>--}}
{{--                        <a href="#" class="dropdown-item text-center">View all Messages</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="dropdown d-none d-md-flex" >
                    <a class="nav-link icon" data-toggle="dropdown">
                        <i class="fe fe-grid"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow  app-selector">
                        <ul class="drop-icon-wrap">
                            <li>
                                <a href="#" class="drop-icon-item">
                                    <i class="icon icon-speech text-dark"></i>
                                    <span class="block"> E-mail</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="drop-icon-item">
                                    <i class="icon icon-map text-dark"></i>
                                    <span class="block">map</span>
                                </a>
                            </li>

                            <li>
                                <a href="#" class="drop-icon-item">
                                    <i class="icon icon-bubbles text-dark"></i>
                                    <span class="block">Messages</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="drop-icon-item">
                                    <i class="icon icon-user-follow text-dark"></i>
                                    <span class="block">Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="drop-icon-item">
                                    <i class="icon icon-picture text-dark"></i>
                                    <span class="block">Photos</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="drop-icon-item">
                                    <i class="icon icon-settings text-dark"></i>
                                    <span class="block">Settings</span>
                                </a>
                            </li>
                        </ul>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">View all</a>
                    </div>
                </div>
                <div class="dropdown ">
                    <a href="#" class="nav-link pl-0 leading-none user-img" data-toggle="dropdown">
                        <img src="{{asset( \App\Models\SiteControl::first()->logo)}}" alt="profile-img" class="avatar avatar-md brround">
                    </a>
                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-arrow ">
                        <a class="dropdown-item" href="{{route('admin.acount-setting.edit')}}">
                            <i class="dropdown-icon icon icon-user"> </i> {{translate('Profile')}}
                        </a>
{{--                        <a class="dropdown-item" href="emailservices.html">--}}
{{--                            <i class="dropdown-icon icon icon-speech"></i> Inbox--}}
{{--                        </a>--}}
{{--                        <a class="dropdown-item" href="editprofile.html">--}}
{{--                            <i class="dropdown-icon  icon icon-settings"></i> Account Settings--}}
{{--                        </a>--}}
                        <a class="dropdown-item" href="{{url('logout')}}">
                            <i class="dropdown-icon icon icon-power"></i> {{translate('logout')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
