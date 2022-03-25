@extends('admin.layout.app')

@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">


                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../"> {{translate('Home')}}</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.employee.index')}}"> {{translate('employee')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page" >{{translate('create')}}  {{translate('employee')}}</li>
                </ol>
            </div>




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title">--</h3>
                </div>
                <div class="card-body">

                    <form action="{{route('admin.employee.store')}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-row  p-15">

                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                <label class="form-label">  {{  translate('image')}}  </label>

                                <input type="file" name="image"  class="dropify"  data-height="180" value="" />
                            </div>
                            <div class="col-md-4"></div>

                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="exampleInputEmail1">{{translate('name')}}</label>
                                    <input type="text" name="name" class="form-control" id="name2" placeholder=" {{translation(lable('name')) }} ">
                                </div>
                            </div>




                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('email')}}</label>
                                <input type="email" class="form-control" id="inputEmail5" name="email" placeholder=" uremail@mail.com ">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('passsword')}}</label>
                                <input type="password" class="form-control" id="inputEmail5" name="password" required autocomplete="current-password" placeholder="       ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('repeat password')}}</label>
                                <input type="password" class="form-control" id="inputEmail5" name="password_confirmation" required autocomplete="current-password"  placeholder="       ">
                            </div>

                            <div class="form-group col-md-6">
                                <label class="form-label">{{translate('department')}}</label>
                                <select class="form-control border select2" data-placeholder="{{translation(lable('department')) }}"  name="department_id" required>
                                    <option selected disabled >{{translate('department')}} </option>

                                    @foreach(department() as $department)
                                        <option value="{{$department->id}}"> {{$department->name}} </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('description')}}</label>
                                <input type="text" class="form-control" id="inputEmail5" name="type" placeholder="{{translation(lable('user_type')) }} ">
                            </div>



                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('city')}}</label>
                                <input type="text" class="form-control" id="inputEmail5" name="city" placeholder="{{translate('city')}} ">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('address ')}}</label>
                                <input type="text" class="form-control" id="inputEmail5" name="adress" placeholder=" {{translate('address ')}} ">
                            </div>



                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('country')}}</label>
                                <select class="form-control select-country border " name="country" placeholder="{{translate('country')}}">




                                    @foreach(\App\Models\Country::all() as $country)

                                        @if (Session::has('locale'))

                                            @if (Session::get('locale')=='en')
                                                <option class="country" value="{{$country->id}}" country_id="{{$country->id}}"   id="{{$country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_en}}</option>

                                            @else

                                                <option class="country" country_id="{{$country->id}}"  value="{{$country->id}}" id="{{ $country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_ar}}</option>
                                            @endif
                                        @else
                                            <option class="country" country_id="{{$country->id}}" value="{{$country->id}}"  id="{{$country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_ar}}</option>

                                        @endif

                                    @endforeach
                                </select>

                                {{--                                <input type="text" class="form-control" value="{{$admin->country}}" id="inputEmail5" name="country" placeholder=" ">--}}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('state')}}</label>



                                <select class="form-control select-country border " name="state" placeholder="{{translate('country')}}">

                                    <option selected > {{translate('state')}} </option>



                                    @foreach(\App\Models\City::all() as $city)

                                        @if (Session::has('locale'))

                                            @if (Session::get('locale')=='en')
                                                <option class="city {{ $city->country_id}}" value="{{$city->id}}"  > {{$city->name_en}}</option>

                                            @else

                                                <option class="city {{ $city->country_id}}" value="{{$city->id}}" id="" > {{$city->name_ar}}</option>
                                            @endif
                                        @else
                                            <option class="city {{ $city->country_id}} " value="{{$city->id}}"  > {{$city->name_ar}}</option>

                                        @endif

                                    @endforeach
                                </select>




                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('city')}}</label>
                                <input type="text" class="form-control"  id="inputEmail5" name="city" placeholder=" ">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('address ')}}</label>
                                <input type="text"  class="form-control" id="inputEmail5" name="adress" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('phone')}}</label>
                                <input type="tel" class="form-control"  id="inputEmail5" name="phone" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('mobile')}} </label>
                                <input type="tel"  class="form-control" id="inputEmail5" name="mobile" placeholder=" ">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputEmail4" class="col-form-label"> . </label>
                                <input type="tel" readonly value="" class="form-control code" id="inputEmail5" name="mobile" placeholder=" ">
                            </div>


                            <div id="map_canvas" style="height: 350px; width: 100%; text-align: center;"></div>

                            <input type="hidden" id="lat1" >
                            <input type="hidden" id="lng" >

                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>



                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">lon</label>
                                <input type="text" class="form-control" id="lon" name="len" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">lat</label>
                                <input type="text" class="form-control" id="lat" name="lat" placeholder=" ">
                            </div>

{{--                          <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4" class="col-form-label">lon</label>--}}
{{--                                <input type="text" class="form-control" id="lon" name="len" placeholder=" ">--}}
{{--                            </div>--}}

{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4" class="col-form-label">lat</label>--}}
{{--                                <input type="text" class="form-control" id="lat" name="lat" placeholder=" ">--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4" class="col-form-label"> map </label>--}}
{{--                                <input type="text" class="form-control"  onblur="getlatLen()"  id="map" placeholder=" ">--}}
{{--                            </div>--}}
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
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('Create')}}</button>
                        </div>

                    </form>
                </div>
            </div>


















@endsection
