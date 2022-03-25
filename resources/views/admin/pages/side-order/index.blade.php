

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('customize side menus')}} </li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
{{--                    <a href="{{url('admin/group/create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('group')}}</a>--}}
                    <a href="{{route('admin.customize.create')}}" class="btn-success btn h-auto w-15 ml-8 mr-8 mt-6 ">{{translate('Create')}} {{translate(' menu')}}</a>
                    <a href="{{route('admin.customize.sort')}}" class="btn-success btn h-auto w-15 ml-8 mr-8 mt-6 ">{{translate('customize side menus')}}</a>


                </div>
                <div class="card-body" id="printthis">

                    <div class="table-responsive">
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                            <tr>

                                <th> {{translate('name')}}</th>
                                <th>{{translate('type')}}</th>
                                <th>{{translate('url')}}</th>
                                <th>{{translate('sub menu')}}</th>

                                <th>{{translate('range')}}</th>
                                <th>{{translate('status')}}</th>

                                <th>#</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach(\App\Models\SideOrder::all() as $order)
                                <tr>

                                    <td><a href="#" class="text-inherit">    {{ translate($order->name)  ? translate($order->name) : ''  }}</a></td>
                                    <td><span class="status-icon bg-success"></span>
                                    @if($order->type =='master')
                                            {{ translate('master menu')}}
                                        @elseif($order->type =='sub-menu')
                                            {{ translate('sub menu')}}
                                        @else
                                            {{ translate(' menu')}}
                                        @endif

                                    </td>
                                    <td><span class="status-icon bg-success"></span> {{ $order->url==null? translate('no url'): $order->url}}</td>

                                    <td><span class="status-icon bg-success"></span> {{ $order->main !=0 ? translate( \App\Models\SideOrder::where('id',$order->main)->first()->name ):  translate('no url')}}</td>


                                    <td><span class="status-icon bg-success"></span> {{ $order->range }}</td>
                                    <td><span class="status-icon bg-success"></span> {{$order->status ==1 ? translate('work') : translate('unwork') }}</td>

                                    <td class="text-left">
         <span>


        <a class="icon" href="#"></a>
                <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.customize.edit',$order->name)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> {{translate('edit')}}  </a>
        <a href="{{route('admin.customize.delete',$order->id)}}" class="btn btn-success btn-sm"><i class="fa fa-toggle-off"></i> {{translate('edit')}}  {{$order->status ==1 ? translate('work') : translate('unwork') }}  </a>
        <button  onclick="document.getElementById('{{$order->id}}').style.display='block'"  data-target="#{{$order->id}}"  class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> {{translate('delete')}}   </button>


             <!-- Modal -->

      </span>
                                        <div id='{{$order->id}}' class="w3-modal   text-center">
                                            <div class="w3-modal-content">
                                                <div class="w3-container">
                                                    <span onclick="document.getElementById('{{$order->id}}').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                                    <p> {{translation(lable('delete message'))}} {{ translate($order->name) }} </p>

                                                    <p>        <a href="{{route('admin.customize.destroy',$order->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i> {{translate('delete')}}  </a>

                                                            <a href="" onclick="document.getElementById('{{$order->id}}').style.display='none'" class="btn btn-success btn-sm"><i class="fa fa-close"></i> {{translate('close')}} </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>



                                    </td>
                                </tr>



                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

