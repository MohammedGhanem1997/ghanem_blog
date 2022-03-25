@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">

                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}">{{translate('home')}}</a></li>

                        <li class="breadcrumb-item"><a href="{{route('admin.page.index')}}">{{translate('page setting')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page">{{translate('Edit page')}}</li>
                    </ol>
                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">{{translate('add page')}}</h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.page.update',$page->id)}}" method="post" enctype="multipart/form-data" >
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
                                        <input type="text" name="name_ar"  value="{{$page->name['ar']}}" class="form-control" id="name1" placeholder=" ">


                                    </div>
                                    <div id="tab_name_en" class="tab-name tab-content">
                                        <input type="text" name="name_en"  value="{{$page->name['en']}}" class="form-control" id="name2" placeholder=" ">

                                    </div>
                                </div>

                            </div>


                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <ul class="tabs-title tabs mr-4"  id="2">
                                        <li class="tab-link currentinput" data-tab="tab_title_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_title_en">{{translate('title')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_title_ar" class="tab-title tab-content currentinput">
                                        <input type="text" name="title_ar" value="{{$page->title['ar']}}" class="form-control" id="name2" placeholder=" ">


                                    </div>
                                    <div id="tab_title_en" class="tab-title tab-content">
                                        <input type="text" name="title_en"  value="{{$page->title['en']}}" class="form-control" id="name" placeholder=" ">

                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="form-row">

                            <div class="form-group col-md-12">
                                <div class="form-group">

                                    <ul class="tabs-contain tabs mr-4" id="3">
                                        <li class="tab-link currentinput" data-tab="tab_description_ar"> {{translate('description')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_description_en">{{translate('description')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_description_ar" class=" tab-content tab-contain currentinput">
                                        <textarea class="" id="myEditor" name="content_ar"> {{$page->content['ar']}} </textarea>


                                    </div>
                                    <div id="tab_description_en" class="tab-content  tab-contain">
                                        <textarea class="" id="myEditor2" name="content_en">  {{$page->content['en']}}</textarea>

                                    </div>
                                </div></div></div>








                <div class="row">
                    <div class="col-lg-12 col-sm-12 pr-4 pl-4">
                        <label class="form-label">  {{translate('image')}}  </label>

                        <input type="file" name="image"  data-default-file="{{asset($page->image)}}" class="dropify" data-height="180" />
                    </div>

                    <div class="form-group col-md-6 text-md-center">
                        <div class="form-label"></div>
                        <label class="custom-switch">
                            <span class="custom-switch-description">{{translate('work')}}</span>
                            <input type="checkbox" name="status" value="1"  @if($page->status ==true)  checked  @endif class="custom-switch-input form-control ">
                            <span class="custom-switch-indicator"></span>
                            <span class="custom-switch-description">{{translate('unwork')}}</span>
                        </label>

                    </div>
                </div>
                <br>
                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                </div>
                </form>
            </div>



            <br>

        </div>
    </div>
    </div>




@endsection
