@extends('admin.layout.app')

@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../">{{translate('Home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.department.index')}}">{{translate('department')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page">{{translate('edit')}} {{translate('department')}}</li>

                    </ol></h4>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"> </h3>
                </div>
                <div class="card-body">

                    <form action="{{route('admin.department.update',$department->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">{{translate('name')}}  {{translate('department')}} </label>
                                    <input type="text" class="form-control" name="name" id="name1"  value="{{$department->name}}" >
                                </div>
                            </div>



                            <div class="form-group col-md-12">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">{{translate('description')}} </label>
                                    <textarea  name="description" class="form-control " id="" placeholder=" ">{{$department->description}}  </textarea>
                                </div>
                            </div>

                            <div class="form-group col-md-12">
                                <div class="form-label"></div>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">{{translate('work')}}</span>
                                    <input type="checkbox" name="status" value="{{true}}" class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{translate('unwork')}}</span>
                                </label>

                            </div>

                            <br>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


















@endsection
