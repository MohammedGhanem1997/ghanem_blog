@extends('admin.layout.app')
@section('contain')


            <!-- App-Content-->
            <div class="app-content  ">
                <div class="side-app">

                    <!-- Page-Header-->
                    <div class="page-header">
                        <h1 class="page-title">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="../"> {{  translate( 'home')}}  </a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{translate('social media setting')}}</li>


                            </ol>
                        </h1>

                    </div>
                    <!--/ Page-Header-->

                    <div class="row ">
                        <div class="col-lg-12">

                            <div class="card">
                                <div class="card-body p-0">

                                        <div class="pr-3 pl-3">
                                            <form action="{{route('admin.head.social-post')}}" method="post" enctype="multipart/form-data">
                                                <h4 class="font-weight-bold mb-4"> </h4>




                                                @foreach( social() as $social)
                                                <div class="form-group ">
                                                    <div class="row">
                                                        <input type="hidden" name="name[]" value="{{$social->name}}">
                                                        <div class="col-md-6">
                                                        <div class="col-md-3">
                                                            <label class="form-label mt-2">{{$social->name}} </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="d-flex">
                                                                <a href="#"><i class="icon icon-question ml-4 mt-3 d-block"></i></a>
                                                                <input type="text"  name="social[]" multiple class="form-control" value="{{$social->url}}">

                                                            </div>
                                                        </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <label class="form-label mt-2"> </label>

                                                                </div>
                                                                <div class="col-md-9">
                                                                    <div class="d-flex">
                                                                        <a href="#"><i class="icon icon-question ml-4 mt-3 d-block"></i></a>
                                                                        <div class="custom-file mt-5">
                                                                            <input type="file" class="custom-file-input form-control" name="icon[]">
                                                                            <label class="custom-file-label">{{  translate('logo')}}</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        </div>




                                                        </div>



                                                </div>

                                                @endforeach


                                                    <br>
                                                    <br>

                                                <div class="card-footer text-center">
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light pl-6 pr-6">{{  translate('Create')}}</button>
                                                </div>


                                        </div>
                                        </form>

























                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>









                </div>



            </div>


            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"> {{translate('site setting')}} </h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.head.site_post')}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <ul class="tabs-title tabs mr-4" id="1">
                                        <li class="tab-link currentinput" data-tab="tab_title_ar">{{translate('site setting')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_title_en">{{translate('site setting')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_title_ar" class="tab-title tab-content currentinput">
                                        <input type="text" name="title_ar" value="{{\App\Models\SiteControl::first()->site_name['ar']}}"  class="form-control" id="name1" placeholder=" ">


                                    </div>
                                    <div id="tab_title_en" class="tab-title tab-content">
                                        <input type="text" name="title_en" value="{{\App\Models\SiteControl::first()->site_name['en']}}" class="form-control" id="name2" placeholder=" ">

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




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">  {{  translate('email')}}</h3>
                </div>
                <div class="card-body">

                    <form action="{{route('admin.head.email-post')}} " method="post" enctype="multipart/form-data" >
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










                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('Create')}}</button>
                </div>

                </form>
            </div>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"> {{translate('address')}} </h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.head.address-post')}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <div class="form-group">
                                    <ul class="tabs-name tabs mr-4" id="1">
                                        <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('address')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_name_en">{{translate('address')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                        <input type="text" name="address_ar"  value="{{\App\Models\SiteControl::first()->address['ar']}}"  class="form-control" id="name1" placeholder=" ">


                                    </div>
                                    <div id="tab_name_en" class="tab-name tab-content">
                                        <input type="text"  name="address_en"  value="{{\App\Models\SiteControl::first()->address['en']}}"class="form-control" id="name2" placeholder=" ">

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






            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">  {{  translate('phone')}}</h3>
                </div>
                <div class="card-body">

                    <form action="{{route('admin.head.phone-post')}} " method="post" enctype="multipart/form-data" >
                        @csrf


                        <div class="form-group text-center">
                            <div class="row  mt-3">

                                <div class="col-md-3">
                                    <label class="form-label mt-2"> {{  translate('mobile')}}  </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex">
                                        <a href="#"><i class="icon icon-question ml-4 mt-3 d-block"></i></a>
                                        <input type="text"  name="mobile" class="form-control" value="{{\App\Models\SiteControl::first()->mobile}}">

                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">

                                <div class="col-md-3">
                                    <label class="form-label mt-2"> {{  translate('phone')}}  </label>
                                </div>
                                <div class="col-md-9">
                                    <div class="d-flex">
                                        <a href="#"><i class="icon icon-question ml-4 mt-3 d-block"></i></a>
                                        <input type="text"  name="phone" class="form-control" value="{{\App\Models\SiteControl::first()->phone}} ">

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


        </div>







@endsection
