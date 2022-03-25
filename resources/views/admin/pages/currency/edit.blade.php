@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.currency.index')}}"> {{translate('currency')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page"> {{translate('edit')}} {{translate('currency')}}</li>
                </ol>

                </h4>

            </div>






            <div class="card">
                <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                <div class="card-header">
                    <h3 class="card-title">{{translate('edit')}} {{translate('currency')}}</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.currency.update',$currency->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf

                        <link href={{ asset('css/tab.css') }} rel="stylesheet" />


                        <div class="form-row">



                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <ul class="tabs-title tabs mr-4"  id="2">
                                        <li class="tab-link currentinput" data-tab="tab_title_ar"> {{translate('name')}} {{translate('arabic')}}</li>
                                        <li class="tab-link" data-tab="tab_title_en"> {{translate('name')}} {{translate('english')}} </li>
                                    </ul>

                                    <div id="tab_title_ar" class="tab-title tab-content currentinput">
                                        <input type="text" name="title_ar"  value="{{$currency->title['ar']}}" class="form-control" id="name2" placeholder=" {{ translation(lable('currency')) }} " required>


                                    </div>
                                    <div id="tab_title_en" class="tab-title tab-content">
                                        <input type="text" name="title_en" value="{{$currency->title['en']}}" class="form-control" id="name" placeholder=" {{ translation(lable('currency')) }} " required>

                                    </div>
                                </div>
                            </div>


                            <br>
                            <br>
                            <button type="submit" class="btn btn-primary btn-block">{{translate('update')}}</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>




@endsection
