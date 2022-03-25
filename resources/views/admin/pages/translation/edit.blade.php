@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{url('admin')}}">{{translate('Home')}}</a></li>
                        <li class="breadcrumb-item"><a href="../">{{translate('translation')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page">{{  translation($translate->translate) }} </li>
                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.translate.update',$translate->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        {{-- <div class="tabs effect-1">
                            <!-- tab-title -->
                            <input type="radio" id="tab-1" name="tab-effect-1" checked="checked">
                            <span>arabic</span>

                            <input type="radio" id="tab-2" name="tab-effect-1">
                            <span>english</span>


                            <!-- tab-content -->
                            <div class="tab-content">
                                <section id="tab-item-1">
                                    <textarea class="content" name="ar"></textarea>



                                </section>
                                <section id="tab-item-2">
                                    <textarea class="content" name="en"></textarea>

                                </section>

                            </div>
                        </div> --}}




                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <ul class="tabs-name tabs mr-4" id="1">
                                        <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_name_en">{{translate('name')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                        <input type="text" name="name_ar"  value="{{  $translate->translate['ar']}}" class="form-control" id="name1" placeholder=" ">


                                    </div>
                                    <div id="tab_name_en" class="tab-name tab-content">
                                        <input type="text" name="name_en"  value="{{$translate->translate['en']}}" class="form-control" id="name2" placeholder=" ">

                                    </div>
                                </div>

                            </div>




                        </div>

                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                        </div>

                    </form>








            </div>






        </div>
    </div>





@endsection
