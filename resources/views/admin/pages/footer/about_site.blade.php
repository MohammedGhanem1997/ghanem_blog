@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#">{{translate('page setting')}}</a></li>
                        <li class="breadcrumb-item"><a href="#">{{translate('add page')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page">{{translate('Home')}}</li>
                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">{{translate('add page')}}</h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.footer.about-site-post')}}" method="post" enctype="multipart/form-data" >
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

                            <div class="form-group col-md-12">
                                <div class="form-group">

                                    <ul class="tabs-contain tabs mr-4" id="3">
                                        <li class="tab-link currentinput" data-tab="tab_description_ar"> {{translate('about site')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_description_en">{{translate('about site')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_description_ar" class=" tab-content tab-contain currentinput">
                                        <textarea id="myEditor" name="description_ar">{!! \App\Models\Footer::first()->description['ar'] !!}</textarea>


                                    </div>
                                    <div id="tab_description_en" class="tab-content  tab-contain">
                                        <textarea id="myEditor2" name="description_en"> {!! \App\Models\Footer::first()->description['en'] !!}</textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-6  pt-7 text-md-center">
                                <div class="form-label"></div>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">{{translate('work')}}</span>
                                    <input type="checkbox" name="status" value="1"  @if(\App\Models\Footer::first()->page_visible == true)  checked  @endif class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{translate('unwork')}}</span>
                                </label>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block mt-4">{{translate('Create')}}</button>                    </form>

                </div>
                        </form>
                </div>
            </div>






{{--                <div class="row">--}}
{{--                    <div class="col-lg-3 col-sm-6">--}}
{{--                        <label class="form-label">  image  </label>--}}

{{--                        <input type="file" name="image" class="dropify" data-height="180" />--}}
{{--                    </div>--}}


{{--                </div>--}}
            </div>






        </div>






@endsection
