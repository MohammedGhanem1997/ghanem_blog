



@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{route('admin')}}">{{translate('Home')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page"> {{translate('email')}}</li>
                    </ol>
                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">  {{  translate('email')}}</h3>
                </div>
                <div class="card-body">

                    <form action="{{url('admin/head/email-post')}} " method="post" enctype="multipart/form-data" >
                        @csrf


                        <div class="form-group text-center">
                            <div class="row  mt-3">

                                <div class="col-md-3">
                                    <label class="form-label mt-2"> {{  translate('email')}}  </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex">
                                        <a href="#"><i class="icon icon-question ml-4 mt-3 d-block"></i></a>
                                        <input type="email"  name="email" class="form-control" value="{{\App\Models\SiteControl::first()->email}}">

                                    </div>
                                </div>
                            </div>


                            </div>

                        </div>








                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('Create')}}</button>
                        </div>

                    </form>
                </div>
            </div>





@endsection








