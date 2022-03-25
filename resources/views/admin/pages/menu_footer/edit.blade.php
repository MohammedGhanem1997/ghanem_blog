@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.menu-footer.index')}}"> {{translate('footer menu')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('edit')}}  {{translate('footer menu')}}</li>
                    </ol>
                </h4>

            </div>
            <link href={{ asset('css/tab.css') }} rel="stylesheet" />




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">- </h3>
                </div>
                <div class="card-body">

                    <form action="{{route('admin.menu-footer.update',$menu->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 ">
                                <ul class="tabs-name tabs mr-4" id="1">
                                    <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                    <li class="tab-link" data-tab="tab_name_en">{{translate('name')}} {{translate('english')}}</li>
                                </ul>

                                <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                    <input type="text" name="name_ar" value="{{$menu->name['ar']}}" class="form-control" id="name1" placeholder=" ">


                                </div>
                                <div id="tab_name_en" class="tab-name tab-content">
                                    <input type="text" name="name_en" value="{{$menu->name['en']}}" class="form-control" id="name2" placeholder=" ">

                                </div>
                            </div>

                            <div class="form-group col-md-6 pt-5">
                                <label class="form-label">{{translate(' menu')}}</label>
                                <select class="form-control select2" data-placeholder="" name="menu_id" required>
                                    <optgroup label="{{translate('Select bar')}}">
                                        @foreach(menufooter() as $nav)
                                            <option value="{{$nav->id}}"> {{translation($nav->name)}} </option>
                                    @endforeach

                                </select>
                            </div>


                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('url')}}</label>
                                <input type="text" class="form-control" id="inputEmail5" value="{{$menu->url}}" name="url" placeholder="url">
                            </div>

                        </div>




                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">   {{translate('icon')}}  </label>

                                <input type="file" name="icon" class="dropify" data-height="180" />
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">   {{translate('image')}} </label>

                                <input type="file" class="dropify" name="image" data-default-file="{{asset('/images/media/media1.jpg')}}" data-height="180"  />
                            </div>

                        </div>
                        <div class="form-group col-md-6 text-md-center">
                            <div class="form-label"></div>
                            <label class="custom-switch">
                                <span class="custom-switch-description">{{translate('work')}}</span>
                                <input type="checkbox" name="status" value="1"  @if($menu->status ==true)  checked  @endif class="custom-switch-input form-control ">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">{{translate('unwork')}}</span>
                            </label>


                        </div>
                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                        </div>

                    </form>
                </div>
            </div>


















@endsection
