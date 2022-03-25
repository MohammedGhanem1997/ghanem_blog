@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">{{translate('create menu')}}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{translate('create menu')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{translate('Home')}}</li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">create submenu </h3>
                </div>
                <div class="card-body">

                    <form action="{{url('admin/sub_menu/store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">name ar</label>
                                    <input type="text" class="form-control" name="name_ar" id="name1" placeholder="name">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">name en</label>
                                    <input type="text" name="name_en" class="form-control" id="name2" placeholder=" ">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-label">menu</label>
                                <select class="form-control select2" data-placeholder="" name="menu_id" required>
                                    <optgroup label="sidebar">

                                        @foreach(sub_menu() as $nav)
                                            @if ($nav->navigation_bar_id ==2)

                                                <option value="{{$nav->id}}"> {{translation($nav->name)}} </option>


                                            @endif
                                        @endforeach
                                        <optgroup label="header">
                                            @foreach(sub_menu() as $nav)
                                                @if ($nav->navigation_bar_id ==3)

                                                    <option value="{{$nav->id}}"> {{translation($nav->name)}} </option>



                                    @endif


                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">url</label>
                                    <input type="text" name="url" class="form-control" id="name2" placeholder=" ">
                                </div>
                            </div>


                            <div class="form-group col-md-6 text-md-center">
                                <div class="form-label">status</div>
                                <label class="custom-switch">
                                    <input type="checkbox" name="status" value={{true}} class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">status</span>
                                </label>

                            </div>
                        </div>




                        <div class="row">
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">  icon  </label>

                                <input type="file" name="icon" class="dropify" data-height="180" />
                            </div>
                            <div class="col-lg-4 col-sm-12">
                                <label class="form-label">  image  </label>

                                <input type="file" class="dropify" name="image" data-default-file="{{asset('/images/media/media1.jpg')}}" data-height="180"  />
                            </div>

                        </div>
                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                        </div>

                    </form>
                </div>
            </div>


















@endsection
