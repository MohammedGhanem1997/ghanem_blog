



@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}} </a></li>
                        <li class="breadcrumb-item"><a href="{{url('admin/role')}}">{{translate('role')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page"> {{translate('edit')}} {{translate('role')}}</li>
                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.roles.update',$role->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">



                            <div class="form-group col-md-12">
                                <div class="form-group">

                                    <label class="form-label">{{translate('name')}} </label>

                                    <input type="text" readonly name="name" class="form-control" value="{{$role->name}}"  id="name2" placeholder=" ">


                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label"> {{translate('permission')}} {{translate('role')}}</label>
                                    <select class="input-group" id="append" name="permissions[]" data-placeholder="Choose Browser" multiple="" >

                                        @foreach( $role->permissions as $permission  )
                                            <option selected value="{{$permission->name }}" data-select2-id="{{$permission->id}}">
                                                {{$permission->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{translate('permission')}}</label>
                                    <select class="input-group " placeholder="{{translate('permission')}}" name="permissions[]"  multiple="" >
                                        <option disabled selected   data-select2-id="controller">
                                            {{translate('permission')}}
                                        </option>
                                        @foreach( Spatie\Permission\Models\Permission::all()->unique(['controller']) as $controller  )


                                            <option disabled   data-select2-id="{{$controller->id}}.'controller">
                                                {{$controller->controller }}
                                            </option>

                                            @foreach(Spatie\Permission\Models\Permission::where('controller',$controller->controller)->get() as $permission)

                                                {{--                                            @if($currant->id != $permission->id )--}}


                                                <option value="{{$permission->name }}" class="checkbox" data-select2-id="{{$permission->id}}.'permissioncintroller'">
                                                    {{$permission->name }}
                                                </option>

                                                {{--                                                @endif--}}
                                            @endforeach


                                        @endforeach


                                    </select>
                                </div>



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
                </div>



                <br>








                <br>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                </div>

                </form>
            </div>
        </div>





@endsection








