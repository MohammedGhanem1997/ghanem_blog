



@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header" dir="rtl">
                <h4 class="page-title">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}} </a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.groups.index')}}">{{translate('group')}}</a></li>

                        <li class="breadcrumb-item active" aria-current="page"> {{translate('Create')}} {{translate('group')}}</li>
                    </ol>

                </h4>

            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">{{translate('Create')}} {{translate('group')}}</h3>
                </div>
                <div class="card-body">
                    <link href={{ asset('css/tab.css') }} rel="stylesheet" />

                    <form action="{{route('admin.groups.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf



                        <div class="form-row">



                            <div class="form-group col-md-12">
                                <div class="form-group">

                                    <label class="form-label">{{translate('name')}} {{translate('group')}}</label>

                                    <input type="text" name="name" class="form-control"  id="name2" placeholder=" {{translate('name')}}">


                                </div>

                            </div>




{{--                            <div class="form-group col-md-6">--}}
{{--                                <div class="form-group">--}}
{{--                                    <label class="form-label">{{translate('permission')}}</label>--}}
{{--                                    <select class="form-control select2 select2-hidden-accessible" name="permissions[]" data-placeholder="Choose Browser" multiple="" data-select2-id="4" tabindex="-1" aria-hidden="true">--}}

{{--                                        @foreach( Spatie\Permission\Models\Permission::where('guard_name','employee')->get() as $permission  )--}}
{{--                                            <option value="{{$permission->name }}" data-select2-id="{{$permission->id}}">--}}
{{--                                                {{$permission->name }}--}}
{{--                                            </option>--}}
{{--                                        @endforeach--}}

{{--                                    </select>--}}
{{--                                </div>--}}



{{--                            </div>--}}
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




                <br>








                <br>

                <div class="card-footer text-center">
                    <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('Create')}}</button>
                </div>

                </form>
            </div>
        </div>





@endsection








