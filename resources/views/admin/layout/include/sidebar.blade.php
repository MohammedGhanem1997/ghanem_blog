

<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar doc-sidebar">
    <div class="app-sidebar__user clearfix">
        <div class="dropdown user-pro-body">
            <div>
                <img src="{{asset(Auth::guard('employee')->user()->image)}}" alt="user-img" class="avatar avatar-lg brround">

                <a href="{{route('admin.acount-setting.edit')}}" class="profile-img">
                    <span class="fa fa-pencil" aria-hidden="true"></span>
                </a>
            </div>
            <div class="user-info">
                <h2> {{Auth::guard('employee')->user()->name}} </h2>
                <span>  {{Auth::guard('employee')->user()->email}}</span>
            </div>
        </div>
    </div>
    <ul class="side-menu">
{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-user-o"></i><span class="side-menu__label">{{translate('admin setting')}}</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/adminsetting')}}">{{  translate('account setting')}}</a></li>--}}
{{--                <li><a class="slide-item" href={{url('admin/head/private',1)}}>{{  translate('securty  and privacy')}}</a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/role')}}">{{  translate('show')}} {{  translate('role')}}</a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/role/create')}}">{{  translate('create')}}{{  translate('role')}}</a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/permission')}}">{{  translate('permission')}}</a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/group')}}">{{  translate('show')}} {{  translate('group')}}</a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/group/create')}}">{{  translate('create')}} {{  translate('group')}}</a></li>--}}
{{--                <li><a class="slide-item" href="#">{{  translate('groups')}}</a></li>--}}
{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="slide  ">--}}
{{--            <a class="side-menu__item" id="site"  data-toggle="slide" href="#"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">{{translate('site setting')}}</span><i class="angle fa fa-angle-right"></i></a>--}}

{{--        </li>--}}


{{--        <li class="slide sub-site" >--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon mdi  mdi-arrow-collapse-up"></i><span class="side-menu__label">{{translate('header sitting')}}</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/sub_menu/')}}"> {{  translate('sub menu')}}</a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/head/logo')}}">{{  translate('logo')}} </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/slider/create')}}">{{  translate('slider')}} </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admen/menu/create')}}">{{  translate('head bar')}}</a></li>--}}


{{--            </ul>--}}
{{--        </li>--}}





{{--        <li class="slide sub-site ">--}}
{{--            <a class="side-menu__item" id="site"  data-toggle="slide" href="#"><i class="side-menu__icon fa fa-unlink"></i><span class="side-menu__label">{{translate(' menu')}}</span><i class="angle fa fa-angle-right"></i></a>--}}

{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/menu')}}"> {{  translate(' menu')}}</a></li>--}}

{{--                <li><a class="slide-item" href="{{url('admin/menu/create')}}">{{  translate('Create')}}  {{  translate(' menu')}}</a></li>--}}

{{--                --}}{{--                <li><a class="slide-item" href="{{url('admin/menu/create')}}"> {{  translate('customize pages')}}</a></li>--}}


{{--            </ul>--}}


{{--        </li>--}}






{{--        <li class="slide sub-site ">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon mdi  mdi-arrow-collapse-down"></i><span class="side-menu__label">{{translate('footer setting')}}</span><i class="angle fa fa-angle-right"></i></a>--}}

{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/menu-footer')}}"> {{  translate(' menu')}}</a></li>--}}

{{--                <li><a class="slide-item" href="{{url('admin/menu/create')}}"> {{  translate('customize pages')}}</a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/footer/about_site')}}"> {{  translate('about site')}}</a></li>--}}

{{--                <li><a class="slide-item" href="{{url('admin/footer/about_site')}}"> {{  translate('copy right')}}</a></li>--}}

{{--            </ul>--}}

{{--        </li>--}}





{{--        <li class="slide sub-site ">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-facebook"></i><span class="side-menu__label">{{  translate('social media setting')}} </span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/head/phone')}}"> {{  translate('phone')}} </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/head/social')}}">{{  translate('social media links')}}  </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/head/email')}}">{{  translate('email')}}  </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/head/address')}}">{{  translate('address ')}}  </a></li>--}}


{{--            </ul>--}}
{{--        </li>--}}




{{--        <li class="slide sub-site ">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-wrench "></i><span class="side-menu__label">{{  translate('general sittings ')}} </span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/translate')}}">{{  translate('translation')}}  </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/currency')}}">{{  translate('currency')}}  </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/menu')}}">{{  translate('panel Setting')}}  </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/payment')}}">{{  translate('payment')}}  </a></li>--}}


{{--            </ul>--}}
{{--        </li>--}}



{{--        <li class="slide ">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-users"></i><span class="side-menu__label">{{translate('employee setting')}}</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/employee/create')}}"> {{  translate('Create')}} </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/employee')}}">{{  translate('veiw')}}  </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/department/create')}}"> {{  translate('Create')}} </a></li>--}}


{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="slide ">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-tag"></i><span class="side-menu__label">{{translate('department')}}</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/department/create')}}"> {{  translate('Create')}} {{translate('department')}} </a></li>--}}


{{--            </ul>--}}
{{--        </li>--}}




{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon icon icon-people"></i><span class="side-menu__label">{{translate('user setting')}}</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <li><a class="slide-item" href="{{url('admin/employee/create')}}"> {{  translate('Create')}} </a></li>--}}
{{--                <li><a class="slide-item" href="{{url('admin/user')}}">{{  translate('veiw')}}  </a></li>--}}


{{--            </ul>--}}
{{--        </li>--}}
{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fe fe-airplay"></i><span class="side-menu__label">{{translate('page setting')}}</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--            <ul class="slide-menu">--}}
{{--                <ul class="slide-menu">--}}
{{--                    <li><a class="slide-item" href="{{url('admin/page/create')}}"> {{  translate('Create')}} </a></li>--}}
{{--                    <li><a class="slide-item" href="{{url('admin/page')}}">{{  translate('veiw')}}  </a></li>--}}


{{--                </ul>--}}
{{--            </ul>--}}
{{--        </li>--}}


{{--        <li class="slide">--}}
{{--            <a href="documentation.html" class="btn btn-light btn-block mt-3">{{translate('logo')}}</a>--}}


{{--        </li>--}}





{{--        @foreach(\App\Models\SideOrder::where('main',0)->get() as $order)--}}




{{--            <li class="slide  " tid="{{$order->id}}">--}}
{{--                <a class="side-menu__item" data-toggle="slide" id="{{$order->id}}side" href="{{$order->url!='#' ?url($order->url):'#'}}">{!! $order->icon !!}<span class="side-menu__label">{{translate($order->name)}}</span><i class="angle fa fa-angle-right"></i></a>--}}
{{--                <ul class="slide-menu">--}}
{{--                    @if($order->type =='master' && \App\Models\SideOrder::where('main',$order->id)->get()->count()>0 )--}}
{{--                        --}}
{{--                        <ul class="slide-menu">--}}

{{--                    @foreach( \App\Models\SideOrder::where('main',$order->id)->orderBy('order', 'ASC')->get() as $sub)--}}
{{--                        @if( \App\Models\SideOrder::where('main',$sub->id)->get()->count()==0)--}}

{{--                        <li><a class="slide-item" href="{{url($sub->url)}}"> {{  translate($sub->name)}} </a></li>--}}



{{--                            @endif--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}


{{--                    @endif--}}
{{--                </ul>--}}

{{--            </li>--}}
{{--                @foreach( \App\Models\SideOrder::where('main',$order->id)->orderBy('order', 'ASC')->get() as $sub)--}}



{{--                        <li class="slide sub-site {{$order->id}}" id="{{$order->id}}">--}}
{{--                            <a class="side-menu__item"   data-toggle="slide" >{!! $sub->icon !!}<span class="side-menu__label">{{translate($sub->name)}}</span><i class="angle fa fa-angle-right"></i> </a>--}}
{{--                            <ul class="slide-menu">--}}
{{--                                @foreach( \App\Models\SideOrder::where('main',$sub->id)->orderBy('order', 'ASC')->get() as $sub_sub)--}}

{{--                                <li><a class="slide-item"  @if($sub->url =='#')  data-toggle="slide"  @else href="{{route($sub->url)}} @endif > {{  translate($sub_sub->name)}} </a></li>--}}

{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </li>--}}


{{--                @endforeach--}}


{{--        @endforeach--}}

        @foreach(\App\Models\SideOrder::where('main',0)->where('status',1)->orderBy('range', 'ASC')->get() as $main)
        <li tid="{{$main->id}}" class=" slide">
                    <a class="side-menu__item" data-toggle="slide" href="#">{!! $main->icon !!} <span class="side-menu__label">{{translate($main->name)}}</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">

                    </ul>
                </li>


            @foreach(\App\Models\SideOrder::where('main',$main->id)->where('status',1)->orderBy('range', 'ASC')->get() as $sub)
                <li class="slide sub-site {{$main->id}}" id="{{$main->id}}">
                    <a class="side-menu__item"  @if($sub->url == '#' ||$sub->url == null || \App\Models\SideOrder::where('main',$sub->id)->get()->count()>0 ) data-toggle="slide" @else href="{{route($sub->url)}}" @endif> {!! $sub->icon !!}<span class="side-menu__label">{{translate($sub->name)}}</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <ul class="slide-menu">

                                                @foreach( \App\Models\SideOrder::where('main',$sub->id)->where('status',1)->orderBy('range', 'ASC')->get() as $sub_sub)

                                                    <li><a class="slide-item" href="{{ $sub_sub->url !='#'||$sub_sub->url==null?  route($sub_sub->url) :''}}"> {{  translate($sub_sub->name)}} </a></li>




                                                    @endforeach
                                                </ul>
                    </ul>
                </li>

            @endforeach

        @endforeach

                                          </ul>


                                      </aside>
