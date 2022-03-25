@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">{{translate('create menu')}}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('admin')}}"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{translate('create')}}  {{translate('footer menu')}}</li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">- </h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{url('admin/menu-footer/store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <ul class="tabs-name tabs mr-4" id="1">
                                    <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                    <li class="tab-link" data-tab="tab_name_en">{{translate('name')}} {{translate('english')}}</li>
                                </ul>

                                <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                    <input type="text" name="name_ar" class="form-control" id="name1" placeholder=" ">


                                </div>
                                <div id="tab_name_en" class="tab-name tab-content">
                                    <input type="text" name="name_en" class="form-control" id="name2" placeholder=" ">

                                </div>
                            </div>

                            <div class="form-group col-md-6 pt-5">
                            <label class="form-label">{{translate(' menu')}}</label>
                            <select class="form-control select2" placeholder="   " name="menu_id" required>
                                <optgroup label="{{translate('Select bar')}}">

                                @foreach(menufooter() as $nav)
                                        <option value="{{$nav->id}}"> {{translation($nav->name)}} </option>
                                @endforeach

                            </select>
                        </div>


                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('url')}}</label>
                                <input type="text" class="form-control" id="inputEmail5" name="url" placeholder="url">
                            </div>

                        </div>




                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">   {{translate('logo')}}  </label>

                                <input type="file" name="icon" class="dropify" data-height="180" />
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">   {{translate('image')}} </label>

                                <input type="file" class="dropify" name="image" data-default-file="{{asset('/images/media/media1.jpg')}}" data-height="180"  />
                            </div>

                        </div>
                        <br>
                        <div class="form-group col-md-4 text-md-center"></div>
                        <div class="form-group col-md-4 text-md-center">
                            <div class="form-label"></div>
                            <label class="custom-switch">
                                <span class="custom-switch-description">{{translate('work')}}</span>
                                <input type="checkbox" name="status" value="{{true}}" class="custom-switch-input form-control ">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">{{translate('unwork')}}</span>
                            </label>


                        </div>
                        <div class="form-group col-md-4 text-md-center"></div>

                        <br>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('create')}}</button>
                        </div>

                    </form>
                </div>
            </div>


















@endsection
