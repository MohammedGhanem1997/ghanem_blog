@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">


                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.customize.index')}}"> {{translate('side menu')}}</a></li>

                    <li class="breadcrumb-item active" aria-current="page" > {{translate('edit')}}   {{\App\Models\translate::where('title',$menu->name)->first()->translate['ar']}}  </li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.customize.updatemenu',$menu->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf


                        <div class="form-row">



                            {{--                            <div class="form-group col-md-6">--}}
                            {{--                                <label class="form-label">{{translate('department')}}</label>--}}
                            {{--                                <select class="form-control border select2" data-placeholder="" name="department_id" required>--}}
                            {{--                                    <optgroup label="  ">--}}
                            {{--                                        @foreach(department() as $department)--}}
                            {{--                                            <option value="{{$department->id}}"> {{$department->name}} </option>--}}
                            {{--                                    @endforeach--}}

                            {{--                                </select>--}}
                            {{--                            </div>--}}
                            {{--                            <div class="form-group col-md-6">--}}
                            {{--                                <label class="form-label"> {{translate('role')}}</label>--}}
                            {{--                                <select class="form-control border select2" data-placeholder=" {{translate('role')}}" name="department_id" required>--}}
                            {{--                                    <optgroup label="  ">--}}
                            {{--                                        @foreach(Spatie\Permission\Models\Role::all() as $role)--}}
                            {{--                                            <option value="{{$role->name}}"> {{$role->name}} </option>--}}
                            {{--                                    @endforeach--}}

                            {{--                                </select>--}}
                            {{--                            </div>--}}






                            <div class="form-group col-md-6 ">
                                <ul class="tabs-name tabs mr-4" id="1">
                                    <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                    <li class="tab-link" data-tab="tab_name_en">{{translate('name')}} {{translate('english')}}</li>
                                </ul>

                                <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                    <input type="text" name="name_ar" value="{{\App\Models\translate::where('title',$menu->name)->first()->translate['ar']}}" class="form-control" id="name1" placeholder="{{translation( lable('name'))}} ">


                                </div>
                                <div id="tab_name_en" class="tab-name tab-content">
                                    <input type="text" name="name_en" class="form-control" value="{{\App\Models\translate::where('title',$menu->name)->first()->translate['en']}}" id="name2" placeholder="{{translation( lable('name'))}}">

                                </div>
                            </div>

                            <div class="form-group col-md-6 pt-4 ">
                                <label for="inputEmail4" class="col-form-label"> {{translate(' menu')}}</label>
                                 <select name="main" class="border form-control">
                                     <option selected  value="{{$menu->main}}" > {{ translate( \App\Models\SideOrder::where('main', $menu->main)->first()->name )}} </option>

                                     <option value="0"   > رئيسي </option>
                                 @foreach(\App\Models\SideOrder::where('main','<>', 0)->get() as $order )

                                                 @if($menu->id !=$order->id)
                                     <option value="{{$order->id}}" > {{ translate($order->name)  }} </option>
                                         @endif
                                     @endforeach
                                 </select>

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('range')}}</label>
                                <input type="number" value="{{$menu->range}}" class="form-control"  id="inputEmail5" name="order" placeholder=" ">

                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('icon')}}</label>
                                <textarea  class="form-control"    name="icon" > {!! $menu->icon !!} </textarea>
                            </div>



                            <div class="form-group col-md-6  pt-7 text-md-center">
                                <div class="form-label"></div>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">{{translate('work')}}</span>
                                    <input type="checkbox" name="status" value="1"  @if($menu->status ==true)  checked  @endif class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{translate('unwork')}}</span>
                                </label>

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
