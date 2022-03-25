



@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}} </a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.controller.index')}}">controller</a></li>

                        <li class="breadcrumb-item active" aria-current="page"> {{translate('edit')}} </li>
                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">{{translate('edit')}} </h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.roles.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">

                            <div class="form-group col-md-6">

                                    <input type="text" readonly value="{{$controller->name}}" name="controller" class="form-control" id="name1" placeholder=" ">


                            </div>

                            <div class="form-group col-md-12">



                                <div class="table-responsive p-4 ">


                                    <table id="example" class="table table-striped table-bordered " >
                                        <thead>
                                        <tr>
                                            <th> #</th>
                                            <th> {{translate('name')}}  </th>
                                            <th>{{translate('status')}}</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>




                                        @foreach( \App\Models\Method::where('controller_id',$controller->id)->get() as $method  )
                                            <tr>

                                                <td><a href="#" class="text-inherit">{{$method->id }}</a></td>

                                                <td><span class="status-icon bg-success"></span> {{$method->name}}</td>
                                                <td><span class="status-icon bg-success"></span> {{$method->status ==1 ? translate('work') : translate('unwork') }}</td>
                                                <td class="text-left">
         <span>

<a class="icon" href="#"></a>
        <a href="{{route('admin.controller.edit',$method->id)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}} {{translate('status')}} {{$method->status ==1 ? translate('work') : translate('unwork') }}</a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.controller.delete',$method->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('Delete')}} </a>
    </span>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>

                                </div>




                            </div>




                            <div class="form-group col-md-6">
                                <label class="form-label">  {{translate('permission')}} </label>
                                <select class="form-control select2" data-placeholder="Choose Browser" multiple>
                                    <optgroup label="  ">

                                        @foreach(\App\Models\Method::where('status',0)->get()  as $method)

                                            <option class="permission '{{$method->controller_id}}'"   value="{{$method->id}}"> {{$method->name}} </option>
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








