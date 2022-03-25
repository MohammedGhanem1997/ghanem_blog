@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">


                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page" > {{translate('edit')}}   {{translate('admin setting')}} </li>
                </ol>
            </div>

            <div class="card">

                <div class="card-body p-6">
                    <div class="panel panel-primary">
                        <div class="tab-menu-heading">
                            <div class="tabs-menu ">
                                <!-- Tabs -->
                                <ul class="nav panel-tabs " >
                                    <li class=""><a style="color: #0a3338" href="#tab1" class="text-black-50" data-toggle="tab">{{translate('mobile')}}</a></li>

                                    <li><a href="#tab4" data-toggle="tab" class="active text-black-50">{{translate('email')}}</a></li>
                                    <li><a href="#tab3" data-toggle="tab" class=" text-black-50">{{translate('passsword')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="panel-body tabs-menu-body">
                            <div class="tab-content">
                                <div class="tab-pane" id="tab1">

                                    <div class="row row-deck">

                                        <div class="card" style="box-shadow: 0 0 ; border: 0 ; !important">

                                            <div class="card-body">
                                                <p id="sentSuccess"></p>
                                                <p id="error"></p>
                                                <div class="form-group">
                                                    <label class="form-label">{{ translate('mobile') }}</label>
                                                    <input type="email"  class="form-control" id="resetemobileinput"  placeholder="{{translation(lable('new mobile')) }}">
                                                </div>
                                                <div id="recaptcha-container"></div>

                                                <div class="form-footer pr-10 pl-10">
                                                    <button type="button" id="phone_reset" class="btn btn-primary btn-block">{{translate('update')}}</button>



                                                </div>
                                            </div>


                                        </div>




                                        <div class="card" style="box-shadow: 0 0 ; border: 0 ; !important">

                                            <div class="card-body">
                                                <p id="sentSuccess"></p>
                                                <p id="error"></p>
                                                <div class="form-group">
                                                    <label class="form-label">{{ translate('code') }}</label>
                                                    <input type="text"  class="form-control" id="resetemobileinput"  placeholder="{{translation(lable('input the code')) }}">
                                                </div>
                                                <div id="recaptcha-container"></div>

                                                <div class="form-footer pr-10 pl-10">
                                                    <button type="button" id="code_send" class="btn btn-primary btn-block">{{translate('send')}}</button>



                                                </div>
                                            </div>
                                            </div>
                                        </div>

                                </div>

                                <div class="tab-pane active" id="tab4">


                                    <div class="row row-deck">

                                        <div class="card" style="box-shadow: 0 0 ; border: 0 ; !important">

                                            <div class="card-body">
                                                <div class="form-group">
                                                    <label class="form-label">{{ translate('email') }}</label>
                                                    <input type="email"  class="form-control" id="resetemailinput"  placeholder="{{translation(lable('new email')) }}">
                                                </div>

                                                <div class="form-group">
                                                    <label class="form-label">{{ translate('passsword') }}</label>
                                                    <input type="password"  class="form-control" id="passswordinput" ">
                                                </div>
                                                <div class="form-footer pr-10 pl-10">
                                                    <button type="button" id="email_reset" class="btn btn-primary btn-block">{{translate('update')}}</button>
                                                </div>
                                            </div>



                            </div>
                        </div>
                    </div>




                                <div class="tab-pane " id="tab3">


                                    <div class="row row-deck">

                                        <div class="card" style="box-shadow: 0 0 ; border: 0 ; !important">

                                            <div class="card-body">
                                                <form action="{{route('admin.acount-setting.changepasswordpost')}}" method="post" enctype="multipart/form-data" >

                                                <div class="form-group">


                                                    <label class="form-label">{{ translate('passsword') }}</label>
                                                    <input type="password" name="oldpassword" class="form-control"   placeholder="*******">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">{{ translate('new password') }}</label>
                                                    <input type="password" name="password"  class="form-control"  placeholder="*******">
                                                </div>
                                                <div class="form-group">
                                                    <label class="form-label">{{ translate('Repeat password') }}</label>
                                                    <input type="password"  name="password_confirmation" class="form-control" i  placeholder="*******">
                                                </div>


                                                <div class="form-footer pr-10 pl-10">
                                                    <button type="submit"  class="btn btn-primary btn-block">{{translate('update')}}</button>
                                                </div>

                                                </form>
                                            </div>



                                        </div>
                                    </div>
                                </div>



                </div>
            </div>




















@endsection
