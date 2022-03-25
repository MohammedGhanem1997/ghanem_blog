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
                    <h3 class="card-title">create menu footer</h3>
                </div>
                <div class="card-body">

                    <form action="{{url('admin/employee/store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">name</label>
                                    <input type="text" name="name" class="form-control" id="name2" placeholder=" ">
                                </div>
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-label">قسم</label>
                                <select class="form-control border select2" data-placeholder="" name="department_id" required>
                                    <optgroup label="  ">
                                        @foreach(department() as $department)
                                            <option value="{{$department->id}}"> {{$department->name}} </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="form-label"> {{translate('role')}}</label>
                                <select class="form-control border select2" data-placeholder=" {{translate('role')}}" name="department_id" required>
                                    <optgroup label="  ">
                                        @foreach(Spatie\Permission\Models\Role::all() as $role)
                                            <option value="{{$role->name}}"> {{$role->name}} </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">emil</label>
                                <input type="email" class="form-control" id="inputEmail5" name="email" placeholder=" ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">password</label>
                                <input type="password" class="form-control" id="inputEmail5" name="password" required autocomplete="current-password" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">repeat password</label>
                                <input type="password" class="form-control" id="inputEmail5" name="password_confirmation" required autocomplete="current-password"  placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">type</label>
                                <input type="text" class="form-control" id="inputEmail5" name="type" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">country</label>
                                <input type="text" class="form-control" id="inputEmail5" name="country" placeholder=" ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">state</label>
                                <input type="text" class="form-control" id="inputEmail5" name="state" placeholder=" ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">city</label>
                                <input type="text" class="form-control" id="inputEmail5" name="city" placeholder=" ">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">adress</label>
                                <input type="text" class="form-control" id="inputEmail5" name="adress" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">phone</label>
                                <input type="tel" class="form-control" id="inputEmail5" name="phone" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">mobile</label>
                                <input type="tel" class="form-control" id="inputEmail5" name="mobile" placeholder=" ">
                            </div>

                          <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">len</label>
                                <input type="text" class="form-control" id="inputEmail5" name="len" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">lat</label>
                                <input type="text" class="form-control" id="inputEmail5" name="lat" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6 text-md-center">
                                <div class="form-label">status</div>
                                <label class="custom-switch">
                                    <input type="checkbox" name="status" value="{{true}}" class="custom-switch-input form-control ">
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
