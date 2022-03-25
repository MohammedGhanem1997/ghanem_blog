@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/menu')}}"> {{translate(' menu')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page">{{translate('edit')}} {{translate(' menu')}} </li>
                    </ol>
                </h4>

            </div>





            <link href={{ asset('css/tab.css') }} rel="stylesheet" />
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{translate('Create')}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('admin/menu/update',$menu->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="row">

                            <div class="form-group col-md-4 ">
                                <ul class="tabs-name tabs mr-4" id="1">
                                    <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                    <li class="tab-link" data-tab="tab_name_en">{{translate('name')}} {{translate('english')}}</li>
                                </ul>

                                <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                    <input type="text" name="name_ar" class="form-control" id="name1" value="{{$menu->name['ar']}}" placeholder=" ">


                                </div>
                                <div id="tab_name_en" class="tab-name tab-content">
                                    <input type="text" name="name_en" value="{{$menu->name['en']}}" class="form-control" id="name2" placeholder=" ">

                                </div>
                            </div>



                            <div class="form-group col-md-4 pt-5">
                                <label class="form-label">{{translate('Select bar')}}</label>
                                <select  class=" border form-control select2-show-search select2-hidden-accessible" data-placeholder="Choose one (with searchbox)" data-select2-id="8" tabindex="-1" aria-hidden="true" name="navigation_bar_id" required>
                                    <optgroup label="{{translate('Select bar')}}">
                                        @foreach(navigation() as $nav)
                                            @if($nav->id == $menu->navigation_bar_id)
                                              <option selected value="{{$nav->id}}"> {{translation($nav->name)}} </option>

                                            @else
                                            <option value="{{$nav->id}}"> {{translation($nav->name)}} </option>
                                            @endif
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group col-md-4 pt-5">
                                <label class="form-label">  {{translate("url")}}  </label>
                                <input class="form-control " name="url"  placeholder="{{translation( lable('url_empty'))}}" value="{{$menu->url}}" />

                            </div>

                        </div>
                        <div class="row">
                            <div class="form-group col-lg-1  text-md-center"></div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label"> {{translate("icon")}}     </label>

                                <input type="file" name="icon" class="dropify" data-default-file=" {{ asset($menu->icon)}}" data-height="180" />
                            </div>
                            <div class="form-group col-lg-1  text-md-center"></div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label"> {{translate("image")}}    </label>

                                <input type="file" class="dropify" data-default-file="{{asset($menu->image) }}" name="image" data-default-file="{{asset('/images/media/media1.jpg')}}" data-height="180"  />
                            </div>

                        </div>
                        <br>
                        <div class="form-group col-lg-12 col-sm-12 text-md-center">
                            <div class="form-label">{{translate('status')}} </div>
                            <label class="custom-switch">
                                <input type="checkbox" name="status" value="{{true}}" class="custom-switch-input form-control ">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">status</span>
                            </label>

                        </div>
                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('Create')}}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>




@endsection
