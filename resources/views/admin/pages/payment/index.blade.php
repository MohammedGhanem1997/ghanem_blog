

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{translate('Payment')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{translate('Home')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
                    <a href="{{route('admin.payment.create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('payment')}}</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">



                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                            <tr>
                                <th> {{translate('name')}}</th>
                                <th>{{translate('image')}}</th>
                                <th>{{translate( 'url')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach( App\Models\Payment::all() as $menu  )
                                <tr>
    <span>
    <td><a href="#" class="text-inherit">{{translation($menu->name) }}</a></td>
    <td> <img height="100px" src="{{asset($menu->image)   }}"></td>
    <td><span class="status-icon bg-success"></span> {{$menu->url}}</td>
    <td class="text-left">

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.payment.edit',$menu->id)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}}</a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.payment.delete',$menu->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('delete')}}</a>
    </span>
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




