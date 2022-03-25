@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">


                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page" > {{translate('edit')}}   {{translate('passsword')}} </li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">

                    <form action="{{url('admin/admin/changepasswordpost')}}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-row  p-15">

                        </div>
                        <div class="form-row">

                              <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('passsword')}}</label>
                                <input type="password" class="form-control" id="inputEmail5" name="password" required autocomplete="current-password" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('repeat password')}}</label>
                                <input type="password" class="form-control" id="inputEmail5" name="password_confirmation" required autocomplete="current-password"  placeholder=" ">
                            </div>





                        </div>


                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('edit')}}</button>
                        </div>

                    </form>
                </div>
            </div>


















@endsection
