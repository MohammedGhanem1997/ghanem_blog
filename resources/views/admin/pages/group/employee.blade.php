

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item"><a href={{url("admin/group")}}> {{translate('group')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('group')}} {{$role->name}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
                    <a href="{{url('admin/group/create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('group')}}</a>
                </div>
                <div class="card-body">



                    <form action="{{route('admin.groups.employee',$role->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">



                            <div class="form-group col-md-6">
                                <div class="form-group">

                                    <label class="form-label">{{translate('name')}} </label>

                                    <input type="text" readonly name="name" class="form-control" value="{{$role->name}}"  id="name2" placeholder=" ">


                                </div>

                            </div>

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label"> {{translate('employee')}} {{translate('group')}}</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="employee[]" data-placeholder="Choose Browser" multiple="" data-select2-id="4" tabindex="-1" aria-hidden="true">

                                        @foreach( $role->users as $user  )
                                            <option selected value="{{$user->id }}" data-select2-id="{{$user->id}}.'user'">
                                                {{$user->name }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label">{{translate('employee')}}</label>
                                    <select class="form-control select2 select2-hidden-accessible" name="allemployee[]" data-placeholder="Choose Browser" multiple="" data-select2-id="4" tabindex="-1" aria-hidden="true">

                                        @foreach( \App\Models\Employee::all() as $user  )
                                            {{--                                            {{ $role->permissions }}--}}

                                            <option value="{{$user->id }}" data-select2-id="{{$user->id}} +'all'">
                                                {{$user->name }}
                                            </option>


                                        @endforeach


                                    </select>
                                </div>



                            </div>








                            <br>
                            <!-- row -->

                            <div class="row">


                                <div class="form-group col-md-6 text-md-center">

                                </div></div>
                            <div class="form-group col-md-6 text-md-center">
                                <div class="form-label"></div>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">{{translate('work')}}</span>
                                    <input type="checkbox" name="status" value="{{true}}" class="custom-switch-input form-control ">
                                    <span class="custom-switch-indicator"></span>
                                    <span class="custom-switch-description">{{translate('unwork')}}</span>
                                </label>

                            </div>
                        </div>



                        <br>








                        <br>

                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                        </div>

                    </form>





                </div>
            </div>
        </div>
    </div>
@endsection

