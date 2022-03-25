@extends('admin.layout.app')
@section('contain')









    <!-- App-Content-->
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">

            <!-- Page-Header-->
            <div class="page-header">
                <h1 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{  translate('home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{  translate('logo')}}</li>
                    </ol>
                </h1>

            </div>
            <!--/ Page-Header-->

            <div class="row ">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">
                            <div class="tab-content">
                                <div class="tab-pane active " id="tab1">
                                    <form class="form-horizontal p-5" action="{{route('admin.head.logo-post')}}" method="post" enctype="multipart/form-data"  >
                                        <h4 class="font-weight-bold mb-4"> </h4>
                                        <div class="form-group text-center">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-8">
                                                </div>
                                                <div class="col-lg-3 col-sm-6  " style="background-image:{{asset( \App\Models\SiteControl::first()->logo)}} !important; ">
                                                    <label class="form-label">  {{  translate('logo')}}  </label>

                                                    <input type="file" name="image"  class="dropify"  data-default-file="{{ asset(\App\Models\SiteControl::first()->logo)}}" data-height="180" value="" />
                                                </div>


                                            </div>
                                        </div>








                                        <div class="card-footer text-center">
                                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{ translate('edit')}}</button>
                                        </div>

                                    </form>

                                </div>























                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>







@endsection
