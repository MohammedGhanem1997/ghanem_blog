


@extends('admin.layout.app')
@section('contain')

    <!--App-Content-->
    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">{{translate('home')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">{{translate('articles')}}</h3>
                            <div class="card-options"> <a class="btn btn-sm btn-primary" href="#">{{translate('veiw')}}</a> </div>
                        </div>
                        <div class="card-body ">
                            <h2 class="text-dark  mt-0 font-weight-bold">{{\App\Models\Blog::get()->count()}}</h2>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-primary w-75" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">{{translate('visitor')}}</h3>
                            <div class="card-options"> <a class="btn btn-sm btn-secondary" href="#">{{translate('veiw')}} </a> </div>
                        </div>
                        <div class="card-body ">
                            <h2 class="text-dark  mt-0 font-weight-bold">{{\App\Models\SiteControl::first()->visitor}}</h2>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-secondary w-45" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-sm-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">{{translate('employee')}}</h3>
                            <div class="card-options"> <a class="btn btn-sm btn-warning" href="#">{{translate('veiw')}}</a> </div>
                        </div>
                        <div class="card-body ">
                            <h2 class="text-dark  mt-0 font-weight-bold">{{\App\Models\Employee::all()->count()}}</h2>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-warning w-50" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 ">
                    <div class="card overflow-hidden">
                        <div class="card-header">
                            <h3 class="card-title">{{translateview('comment')}}</h3>
                            <div class="card-options"> <a class="btn btn-sm btn-info" href="#">View</a> </div>
                        </div>
                        <div class="card-body ">


                            <h2 class="text-dark  mt-0  font-weight-bold"> {{\App\Models\Comment::all()->count()}}</h2>
                            <div class="progress progress-sm mt-0 mb-2">
                                <div class="progress-bar bg-info w-25" role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>
    </div>


@endsection

