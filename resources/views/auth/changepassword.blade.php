

@extends('layout.app')
@section('contain')


    <!--Loader-->
    <div id="global-loader">
        <img src={{asset('images/loader.svg')}} class="loader-img" alt="">
    </div>
    <!--/Loader-->

    <!--Page-->
    <div class="page page-h">
        <div class="page-content z-documentation-10">
            <div class="container">
                @include('admin.layout.include.alertmsg')

                <div class="row">
                    <div class="col-xl-4 col-md-12 col-md-12 d-block mx-auto">
                        <div class="card mb-xl-0">
                            <div class="card-header">
                                <h3 class="card-title">Register</h3>
                            </div>
                            <div class="card-body">

                                <form action="{{route('/')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$user->emil}}" name="emil">
                                    <div class="form-group">
                                        <label class="form-label text-dark"> new Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input">
                                            <span class="custom-control-label text-dark">Agree the <a href="terms.html">terms and policy</a></span>
                                        </label>
                                    </div>
                                    <div class="form-footer mt-2">
                                        <button type="submit" class="btn btn-primary btn-block">Create New Account</button>
                                    </div>
                                    <div class="text-center  mt-3 text-dark">

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<!-- JQuery js-->
