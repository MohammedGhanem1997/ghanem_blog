





@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{url('admin')}}"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('address')}} </li>


                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"> {{translate('address')}} </h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{url('admin/head/address-post/')}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <ul class="tabs-name tabs mr-4" id="1">
                                        <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('address')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_name_en">{{translate('address')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                        <input type="text" name="address_ar"  class="form-control" id="name1" placeholder=" ">


                                    </div>
                                    <div id="tab_name_en" class="tab-name tab-content">
                                        <input type="text" value="" name="address_en" class="form-control" id="name2" placeholder=" ">

                                    </div>
                                </div>

                            </div>




                        </div>
                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('edit')}}</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>











@endsection
