@extends('admin.layout.app')
@section('contain')


    <!-- App-Content-->
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">

            <!-- Page-Header-->
            <div class="page-header">
                <h1 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/"> {{  translate( 'home')}}  </a></li>
                        <li class="breadcrumb-item active" aria-current="page">SEO</li>


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
                                    <form class="form-horizontal p-5">
                                        <h4 class="font-weight-bold mb-4"> </h4>




                                        @foreach( \App\Models\SEO::where('table','Home')->get() as $seo )
                                            <div class="form-group mb-3">
                                                <div class="row mb-3"  >

                                                        <div class="col-md-3">
                                                            <label class="form-label mt-2">{{$seo->meta}} </label>
                                                        </div>
                                                        <div class="col-md-9">
                                                            <div class="d-flex">
                                                                <a href="#"><i class="icon icon-question ml-4 mt-3 d-block"></i></a>
                                                                <input type="text"  name="{{$seo->description}}" class="form-control" value="{{$seo->description}}">

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
    </div>
    </div>







@endsection
