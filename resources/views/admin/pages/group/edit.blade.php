



@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}} </a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.groups.index')}}">{{translate('group')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page"> {{translate('permission')}} {{translate('group')}}</li>
                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.groups.update',$role->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">



                            <div class="form-group col-md-12">
                                <div class="form-group">

                                    <label class="form-label">{{translate('name')}} </label>

                                    <input type="text" name="name"  class="form-control" value="{{$role->name}}"  id="name2" placeholder=" ">


                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{translate('permission')}}</label>
{{--                                    <select class="select" multiple data-mdb-placeholder="Example placeholder"  multiple>--}}
                                    <select class="input-group"  id="master" placeholder="{{translate('permission')}}" name="permissions[]" multiple="" size="12"  >
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
                                                    {{   translateelement($permission->id ) }}
                                                </option>

                                                {{--                                                @endif--}}
                                            @endforeach


                                        @endforeach


                                    </select>

                                    <br>

                                    <a class="icon" href="javascript:void(0)"></a>
                                    <a href="#" class="btn btn-danger btn-sm" onClick="window.location.reload()" ><i class="fa fa-backward"></i> {{translate('back')}} </a>

                                </div>



                            </div>

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{translate('permission')}} {{translate('group')}}</label>
                                    <select class="input-group append " id="append" name="grouppermissions[]"   multiple="" size="12" >

                                        @foreach( $role->permissions as $permission  )
                                            {{--                                            {{ $role->permissions }}--}}

                                            <option value="{{$permission->name }}" data-badge="" data-select2-id="{{$permission->id}}">
                                                {{   translateelement($permission->id ) }}

                                            </option>


                                        @endforeach


                                    </select>
                                </div>



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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-css/1.4.6/select2-bootstrap.min.css">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/css/select2.min.css" rel="stylesheet" />


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>






        <script>


    $(".js-select2").select2({
        closeOnSelect : false,
        placeholder : "Placeholder",
        // allowHtml: true,
        allowClear: true,
        tags: true // создает новые опции на лету
    });
</script>



@endsection








