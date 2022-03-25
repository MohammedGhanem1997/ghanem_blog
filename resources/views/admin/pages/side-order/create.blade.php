@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">


                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.customize.index')}}"> {{translate('side menu')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page" > {{translate('create')}}   {{translate('side menu')}} </li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.customize.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf


                        <div class="form-row">





                             <div class="form-group col-md-6 ">
                                <ul class="tabs-name tabs mr-4" id="1">
                                    <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                    <li class="tab-link" data-tab="tab_name_en">{{translate('name')}} {{translate('english')}}</li>
                                </ul>

                                <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                    <input type="text" name="name_ar" class="form-control" id="name1" placeholder="{{translation( lable('name'))}} ">


                                </div>
                                <div id="tab_name_en" class="tab-name tab-content">
                                    <input type="text" name="name_en" class="form-control" id="name2" placeholder="{{translation( lable('name'))}}">

                                </div>
                            </div>

                            <div class="form-group col-md-6  pt-5">
                                <label for="inputEmail4" class="col-form-label"> {{translate(' menu')}}</label>
                                <select name="main" class="form-control border">

                                    <option value="0"   > رئيسي </option>
                                    @foreach(\App\Models\SideOrder::where('status', 1)->get() as $order )


                                        <option value="{{$order->id}}" > {{ translate($order->name)  }} </option>

                                    @endforeach
                                </select>

                            </div>





                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('range')}}</label>
                                <input type="number" class="form-control"  id="inputEmail5" name="order" placeholder=" ">

                            </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4" class="col-form-label">   {{translate("url")}}  </label>
                                    <input class="form-control " name="url" placeholder="{{translation( lable('url_empty'))}}" />

                                </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('icon')}}</label>
                                <textarea  class="form-control" name="icon" > </textarea>
                            </div>

                            <div class="form-group col-md-6  pt-5 text-md-center">
                                <div class="form-label"></div>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">{{translate('work')}}</span>
                                    <input type="checkbox" name="status" value="{{true}}" class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{translate('unwork')}}</span>
                                </label>

                            </div>










                        </div>


                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('create')}}</button>
                        </div>

                    </form>
                </div>
            </div>


















@endsection
