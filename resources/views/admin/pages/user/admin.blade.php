
@extends('admin.layout.app')
@section('contain')










            <!--App-Content-->
<div class="app-content my-3 my-md-5">
    <div class="side-app">
        <div class="page-header">
            <h4 class="page-title">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{translate('admin setting')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{translate('Home')}}</li>
                </ol>
            </h4>

        </div>
        <!--Page-Header-->

        <div class="row ">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">My Profile</h3>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row mb-2">
                                <div class="col-auto">
                                </div>
                                <div class="col">
                                    <h3 class="mb-1 ">{{$admin->name}}</h3>
                                    <p class="mb-4 ">{{$admin->name}}</p>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label">{{translate('email')}}</label>
                                <input class="form-control" placeholder="{{translate('email')}}"/>
                            </div>
                            <div class="form-group">
                                <label class="form-label"> {{translate('passsword')}}</label>
                                <input type="password" class="form-control" value="password"/>
                            </div>

                            <div class="form-footer">
                                <button class="btn btn-primary btn-block">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <form class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{translate('edit')}}</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">





                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="form-label">{{translate('address ')}}</label>
                                    <input type="text" class="form-control" placeholder="" >
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4">
                                <div class="form-group">
                                    <label class="form-label">{{translate('city')}}</label>
                                    <input type="text" class="form-control" placeholder="{{translate('city')}}" >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <div class="form-group">
                                    <label class="form-label">{{translate('country')}}</label>
                                    <select class="form-control custom-select border">
                                        <option value="0">--Select--</option>
                                        <option value="1">Egypt</option>
                                        <option value="2">Canada</option>
                                        <option value="3">Usa</option>
                                        <option value="4">Aus</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">{{translate('update')}}</button>
                    </div>
                </form>
            </div>
            <div class="col-md-12">
                <div class="card">


                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
