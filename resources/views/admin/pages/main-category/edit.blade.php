@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">


                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                <li class="breadcrumb-item"><a href="{{ route('admin.main-category.index' ) }}"> {{translate('Main Categories')}} </a></li>

                    <li class="breadcrumb-item active" aria-current="page" >{{translate('edit')}}  {{translate('Main Categories')}} </li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.main-category.update',$category->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf


                        <div class="form-row">





                             <div class="form-group col-md-6 ">
                                <ul class="tabs-name tabs mr-4" id="1">
                                    <li class="tab-link currentinput" data-tab="tab_name_ar">{{translate('name')}} {{translate('arabic')}}</li>
                                    <li class="tab-link" data-tab="tab_name_en">{{translate('name')}} {{translate('english')}}</li>
                                </ul>

                                <div id="tab_name_ar" class="tab-name tab-content currentinput">
                                    <input type="text" name="name_ar" value="{{ $category->name['ar']}}" class="form-control" id="name1" placeholder="{{translation( lable('name'))}} ">


                                </div>
                                <div id="tab_name_en" class="tab-name tab-content">
                                    <input type="text" name="name_en" class="form-control" value="{{ $category->name['en']}}"  id="name2" placeholder="{{translation( lable('name'))}}">

                                </div>
                            </div>



                            <div class="form-group col-md-6 ">
                                <div class="form-group">

                                    <ul class="tabs-contain tabs mr-4" id="3">
                                        <li class="tab-link currentinput" data-tab="tab_description_ar"> {{translate('description')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_description_en">{{translate('description')}} {{translate('english')}}</li>
                                    </ul>

                                    <div id="tab_description_ar" class=" tab-content tab-contain currentinput">
                                        <textarea class="form-control" name="content_ar"> {{ $category->short_description['ar']}} </textarea>


                                    </div>
                                    <div id="tab_description_en" class="tab-content  tab-contain">
                                        <textarea class="form-control" name="content_en"> {{ $category->short_description['en']}}  </textarea>

                                    </div>
                                </div>
                            </div>





                            <div class="form-group col-md-6" >
                                <label for="inputEmail4" class="col-form-label">{{translate('image')}}</label>
                                <input type="file" name="image" class="dropify" data-default-file={{ asset($category->image)}}  data-height="180" />

                            </div>

                            <div class="form-group col-md-6  pt-5 text-md-center p-10" >
                                <div class="form-label"></div>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">{{translate('work')}}</span>
                                    <input type="checkbox" name="status" value="{{true}}" checked class="custom-switch-input form-control ">
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
            </div>


















@endsection
