



@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="#">{{translate('Home')}}</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.slider.index')}}"> {{translate('slider')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page"> {{translate('Create')}} {{translate('slider')}}</li>
                    </ol>
                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">{{translate('edit')}} {{translate('slider')}}</h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.slider.update',$slider->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">



                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <ul class="tabs-title tabs mr-4"  id="2">
                                        <li class="tab-link currentinput" data-tab="tab_title_ar"> {{translate('name')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_title_en"> {{translate('name')}} {{translate('english')}} </li>
                                    </ul>

                                    <div id="tab_title_ar" class="tab-title tab-content currentinput">
                                        <input type="text" name="title_ar" value="{{$slider->title['ar']}}" class="form-control" id="name2" placeholder=" ">


                                    </div>
                                    <div id="tab_title_en" class="tab-title tab-content">
                                        <input type="text" name="title_en" value="{{$slider->title['en']}}" class="form-control" id="name" placeholder=" ">

                                    </div>
                                </div>
                            </div>








                        </div>


                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <div class="form-group">

                                    <ul class="tabs-contain tabs mr-4" id="3">
                                        <li class="tab-link currentinput" data-tab="tab_description_ar"> {{translate('description')}} {{translate('arabic')}} </li>
                                        <li class="tab-link" data-tab="tab_description_en">{{translate('description')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_description_ar" class=" tab-content tab-contain currentinput">
                                        <textarea class="form-control" name="content_ar"> {{$slider->description['ar']}} </textarea>


                                    </div>
                                    <div id="tab_description_en" class="tab-content  tab-contain">
                                        <textarea class="form-control" name="content_en"> {{$slider->description['ar']}} </textarea>

                                    </div>
                                </div></div>



                        </div>

                        <br>
                        <div class="row">


                            <label class="form-label">  {{  translate('image')}}  </label>

                            <input type="file" name="image" class="dropify" data-default-file="{{asset($slider->image)}}" data-height="180"  />



                        </div><!-- row -->

                        <div class="row">





                            <div class="form-group col-md-6 text-md-center">
                                <div class="form-label"></div>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">{{translate('work')}}</span>

                                    <input type="checkbox" name="status" value="1"  @if($slider->visible ==true)  checked  @endif class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{translate('unwork')}}</span>

                                </label>

                            </div>
                        </div>



                        <br>








                        <br>
                        <button type="submit" class="btn btn-primary btn-block mt-4"> {{translate('Create')}}</button>


                    </form>
                </div>
            </div>





@endsection








