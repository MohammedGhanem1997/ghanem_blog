



@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}} </a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.permissions.index')}}">{{translate('permission')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page"> {{translate('Create')}} {{translate('permission')}}</li>
                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">{{translate('Create')}} {{translate('permission')}}</h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.permissions.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <ul class="tabs-name tabs mr-4" id="1">
                                    <li class="tab-link currentinput" data-tab="tab_name_ar"> {{translate('permission')}} {{translate('english')}} </li>
                                    <li class="tab-link" data-tab="tab_name_en">{{translate('permission')}} {{translate('arabic')}} </li>
                                </ul>

                                <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                    <input type="text" name="name" class="form-control" id="name1" placeholder=" ">

                                </div>
                                <div id="tab_name_en" class="tab-name tab-content">
                                    <input type="text" name="name_ar" class="form-control" id="name2" placeholder=" ">

                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-label">  الكونترولار </label>
                                <select   name="controller" class="form-control border  permmisioncreate "  data-placeholder= "{{translate('name')}} {{translate('role')}}"   >
                                    <optgroup label="  ">

                                        @foreach(\App\Models\Controller::where('status',1)->get()  as $controller)

                                                <option class="controller" controller_id="{{$controller->id}}" value="{{$controller->name}}"> {{$controller->name}} </option>
                                    @endforeach

                                </select>
                            </div>




                            <div class="form-group col-md-6">
                                <label class="form-label">  {{translate('permission')}} </label>
                                <select class="form-control border " name="method_name" placeholder="Choose Browser" >

                                        <option selected class=""> {{translate('permission')}} </option>

                                        @foreach(\App\Models\Method::where('status',1)->get()  as $method)

                                            <option class="permission  {{$method->controller_id}}"   value="{{$method->name}}"> {{$method->name}} </option>
                                    @endforeach

                                </select>
                            </div>







                            <div class="form-group col-md-12">




                            </div>



                            {{--                            <div class="form-group col-md-6">--}}
                            {{--                                <div class="form-group">--}}
                            {{--                                    <label class="form-label">{{translate('permission')}}</label>--}}
                            {{--                                    <select class="input-group " placeholder="{{translate('permission')}}" name="permissions[]"  multiple="" >--}}
                            {{--                                        <option disabled selected   data-select2-id="controller">--}}
                            {{--                                            {{translate('permission')}}--}}
                            {{--                                        </option>--}}
                            {{--                                        @foreach( Spatie\Permission\Models\Permission::all()->unique(['controller']) as $controller  )--}}


                            {{--                                            <option disabled   data-select2-id="{{$controller->id}}.'controller">--}}
                            {{--                                                {{$controller->controller }}--}}
                            {{--                                            </option>--}}

                            {{--                                            @foreach(Spatie\Permission\Models\Permission::where('controller',$controller->controller)->get() as $permission)--}}

                            {{--                                                --}}{{--                                            @if($currant->id != $permission->id )--}}


                            {{--                                                <option value="{{$permission->name }}" class="checkbox" data-select2-id="{{$permission->id}}.'permissioncintroller'">--}}
                            {{--                                                    {{$permission->name }}--}}
                            {{--                                                </option>--}}

                            {{--                                                --}}{{--                                                @endif--}}
                            {{--                                            @endforeach--}}


                            {{--                                        @endforeach--}}


                            {{--                                    </select>--}}
                            {{--                                </div>--}}



                            {{--                            </div>--}}




                        </div>






                        <br>
                        <!-- row -->

                        <div class="row">


                            <div class="form-group col-md-6 text-md-center">

                            </div></div>
                        <div class="form-group col-md-6 text-md-center">
                            <div class="form-label"></div>
                            <label class="custom-switch">
                                <span class="custom-switch-description">{{translate('work')}}</span>
                                <input type="checkbox" name="status" value="{{true}}" class="custom-switch-input form-control ">
                                <span class="custom-switch-indicator"></span>
                                <span class="custom-switch-description">{{translate('unwork')}}</span>
                            </label>

                        </div>



                        <br>








                        <br>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('Create')}}</button>
                        </div>

                    </form>
                </div>
            </div>





@endsection








