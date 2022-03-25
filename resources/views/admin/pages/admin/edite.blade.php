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




            <div class="card m-b-20">
                <div class="card-header">
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-body">

                    <form action="{{route('admin.acount-setting.update',$admin->id)}}" method="post" enctype="multipart/form-data" >
                        @csrf

                      <div class="form-row  p-15">

                          <div class="col-md-4">
                              <label class="form-label">  {{  translate('image')}}  </label>

                              <input style="width: fit-content" type="file" name="image"  data-default-file="{{ asset($admin->image)}}" class="dropify" data-height="180" value="" />
                      </div>
                          <div class="col-md-4 pt-5"></div>
                          <div class="col-md-4 pt-5">

                             <h2>{{$admin->name}}</h2>
                              <br>


                              <strong> {{$admin->email}} </strong>
                          </div>

                      </div>
                        <div class="form-row">

                            <div class="form-group col-md-6 pt-1">
                                <div class="form-group pt-1">
                                    <label class="form-label" for="exampleInputEmail1">{{translate('name')}}</label>
                                    <input type="text" name="name" value="{{$admin->name}}" class="form-control" id="name2" placeholder=" ">
                                </div>
                            </div>

{{--                            <div class="form-group col-md-6">--}}
{{--                                <label class="form-label">{{translate('department')}}</label>--}}
{{--                                <select class="form-control border select2" data-placeholder="" name="department_id" required>--}}
{{--                                    <optgroup label="  ">--}}
{{--                                        @foreach(department() as $department)--}}
{{--                                            <option value="{{$department->id}}"> {{$department->name}} </option>--}}
{{--                                    @endforeach--}}

{{--                                </select>--}}
{{--                            </div>--}}
{{--                            <div class="form-group col-md-6">--}}
{{--                                <label class="form-label"> {{translate('role')}}</label>--}}
{{--                                <select class="form-control border select2" data-placeholder=" {{translate('role')}}" name="department_id" required>--}}
{{--                                    <optgroup label="  ">--}}
{{--                                        @foreach(Spatie\Permission\Models\Role::all() as $role)--}}
{{--                                            <option value="{{$role->name}}"> {{$role->name}} </option>--}}
{{--                                    @endforeach--}}

{{--                                </select>--}}
{{--                            </div>--}}






                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('country')}}</label>
                               <select class="form-control select-country border " name="country" placeholder="{{translate('country')}}">




                                   @foreach(\App\Models\Country::all() as $country)

                                       @if (Session::has('locale'))

                                           @if (Session::get('locale')=='en')
                                               @if($admin->country ==$country->id )
                                                   <option selected class="country"  value="{{$country->id}}" country_id="{{$country->id}}"   id="{{$country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_en}}</option>

                                               @endif

                                               <option class="country" value="{{$country->id}}" country_id="{{$country->id}}"   id="{{$country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_en}}</option>

                                           @else

                                               @if($admin->country ==$country->id )
                                                   <option selected class="country"  country_id="{{$country->id}}"  value="{{$country->id}}" id="{{ $country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_ar}}</option>

                                               @endif

                                               <option class="country"  country_id="{{$country->id}}"  value="{{$country->id}}" id="{{ $country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_ar}}</option>
                                           @endif
                                       @else
                                           @if($admin->country ==$country->id )
                                               <option selected class="country"  country_id="{{$country->id}}" value="{{$country->id}}"  id="{{$country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_ar}}</option>

                                           @endif
                                           <option class="country" country_id="{{$country->id}}" value="{{$country->id}}"  id="{{$country->cities->count()>1 ?$country->cities[0]->code  :''}}" > {{$country->name_ar}}</option>

                                       @endif

                                   @endforeach
                               </select>

{{--                                <input type="text" class="form-control" value="{{$admin->country}}" id="inputEmail5" name="country" placeholder=" ">--}}
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('state')}}</label>



                                <select class="form-control select-country border " name="state" placeholder="{{translate('country')}}">




                                    @foreach(\App\Models\City::all() as $city)

                                        @if (Session::has('locale'))

                                            @if (Session::get('locale')=='en')
                                                @if($admin->state ==$city->id )
                                                    <option class="city {{ $city->country_id}}" value="{{$city->id}}"  selected >   {{$city->name_en}}</option>

                                                @endif
                                                <option class="city {{ $city->country_id}}" value="{{$city->id}}"  > {{$city->name_en}}</option>

                                            @else
                                                @if($admin->state ==$city->id )
                                                    <option class="city {{ $city->country_id}}" selected value="{{$city->id}}" id="" > {{$city->name_ar}}</option>

                                                @endif
                                                <option class="city {{ $city->country_id}}" value="{{$city->id}}" id="" > {{$city->name_ar}}</option>
                                            @endif
                                        @else
                                            @if($admin->state ==$city->id )
                                                <option selected class="city {{ $city->country_id}} " value="{{$city->id}}"  > {{$city->name_ar}}</option>

                                            @endif

                                            <option class="city {{ $city->country_id}} " value="{{$city->id}}"  > {{$city->name_ar}}</option>

                                        @endif

                                    @endforeach
{{--                                        <option selected >{{translate('state')}} </option>--}}

                                </select>




                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">{{translate('city')}}</label>
                                <input type="text" class="form-control" value="{{$admin->city}}" id="inputEmail5" name="city" placeholder=" ">

                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('address ')}}</label>
                                <input type="text" value="{{$admin->adress}}" class="form-control" id="inputEmail5" name="adress" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('phone')}}</label>
                                <input type="tel" class="form-control" value="{{$admin->phone}}" id="inputEmail5" name="phone" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label"> {{translate('mobile')}} </label>
                                <input type="tel" value="{{$admin->mobile}}" required class="form-control" id="inputEmail5" name="mobile" placeholder=" ">
                            </div>
                            <div class="form-group col-md-1">
                                <label for="inputEmail4" class="col-form-label"> . </label>
                                <input type="tel"  value="" class="form-control code" id="inputEmail5" name="" placeholder=" ">
                            </div>


                            <div id="map_canvas" style="height: 350px; width: 100%; text-align: center;"></div>

                            <input type="hidden" id="lat1" >
                            <input type="hidden" id="lng" >

                            <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>



                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">lon</label>
                                <input type="text" class="form-control" id="lon" value="{{$admin->len}}" name="len" placeholder=" ">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="inputEmail4" class="col-form-label">lat</label>
                                <input type="text" class="form-control" value="{{$admin->lat}}" id="lat" name="lat" placeholder=" ">
                            </div>
{{--                            <div class="form-group col-md-6">--}}
{{--                                <label for="inputEmail4" class="col-form-label"> map </label>--}}
{{--                                <input type="text" class="form-control"  onblur="getlatLen()"  id="map" placeholder=" ">--}}
{{--                            </div>--}}


                        </div>


                        <br>
                        <div class="card-footer text-center">
                            <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                        </div>

                    </form>
                </div>
            </div>


















@endsection
