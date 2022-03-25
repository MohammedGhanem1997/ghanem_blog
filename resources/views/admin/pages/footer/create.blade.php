@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">{{translate('create menu')}}</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">{{translate('create menu')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{translate('Home')}}</li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">create footer </h3>
                </div>
                <div class="card-body">

                    <form action="{{url('admin/footer/store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">copyright_ar</label>
                                    <input type="text" class="form-control" name="copyright_ar" id="name1" placeholder="name">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">name en</label>
                                    <input type="text" name="copyright_en" class="form-control" id="name2" placeholder=" ">
                                </div>
                            </div>


                        <div class="form-group col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">description_en</label>
                                <input type="text" name="description_en" class="form-control" id="name2" placeholder=" ">
                            </div>
                        </div>

                                   <div class="form-group col-md-6">
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail1">description_ar</label>
                                <input type="text" name="description_ar" class="form-control" id="name2" placeholder=" ">
                            </div>
                        </div>
                            <div class="form-group col-md-6 text-md-center">
                                <div class="form-label">status</div>
                                <label class="custom-switch">
                                    <input type="checkbox" name="status" value={{true}} class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">status</span>
                                </label>

                            </div>
                        </div>





                        <br>
                        <button type="submit" class="btn btn-primary btn-block mt-2">create</button>                    </form>


                    </form>
                </div>
            </div>


















@endsection
