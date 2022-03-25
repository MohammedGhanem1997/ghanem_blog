@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{translate('Create')}} {{translate('payment')}}  </li>
                </ol>

                </h4>

            </div>






            <div class="card">
                <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                <div class="card-header">
                </div>
                <div class="card-body">
                    <form action="{{route('admin.payment.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">



                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <ul class="tabs-title tabs mr-4"  id="2">
                                        <li class="tab-link currentinput" data-tab="tab_title_ar"> {{translate('name')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_title_en"> {{translate('name')}} {{translate('english')}} </li>
                                    </ul>

                                    <div id="tab_title_ar" class="tab-title tab-content currentinput">
                                        <input type="text" name="title_ar" class="form-control" id="name2" placeholder=" ">


                                    </div>
                                    <div id="tab_title_en" class="tab-title tab-content">
                                        <input type="text" name="title_en" class="form-control" id="name" placeholder=" ">

                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <ul class="tabs-title tabs mr-4"  id="2">
                                        <li class="tab-link currentinput" data-tab="tab_name_ar">  {{translate('url')}}</li>
                                    </ul>

                                    <div id="tab_title_ar" class=" tab-content currentinput">
                                        <input type="text" name="url" class="form-control" id="name2" placeholder=" ">


                                    </div>

                                </div>
                            </div>


                        </div>









                            <div class="row mr-4 mb-3">

                                <label class="form-label">  {{  translate('logo')}}  </label>

                                <input type="file" name="image" class="dropify" data-height="180" value="{{\App\Models\SiteControl::first()->logo}}" />



                            </div>
                        <br>
                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('Create')}}</button>
                            </div>
                    </form>

                </div>
            </div>
        </div>




@endsection
