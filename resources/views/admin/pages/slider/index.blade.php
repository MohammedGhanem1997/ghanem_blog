
@extends('admin.layout.app')
@section('contain')

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{translate('home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{translate('slider')}}</li>
                    </ol>
                </h4>

            </div>
            <div class="card m-b-20">
                <a href="{{route('admin.slider.create')}}" class="btn-success btn h-auto w-15 ml-8 mr-8 mt-6 ">{{translate('create')}} {{translate('slider')}}</a>

                <div class="card-body" id="printthis">

<div class="table-responsive">


    <table class="table card-table table-vcenter text-nowrap">
        <thead>
        <tr>
            <th> {{translate('name')}}</th>
            <th>{{translate('image')}}</th>
            <th>{{translate( 'url')}}</th>
            <th>{{translate('status')}}</th>
            <th></th>
        </tr>
        </thead>
        <tbody>




        @foreach( App\Models\Slider::all() as $menu  )
<tr>
    <span>
    <td><a href="store.html" class="text-inherit">{{translation($menu->title) }}</a></td>
    <td> <img height="100px" src="{{ asset($menu->image)   }}"></td>
    <td><span class="status-icon bg-success"></span>  {{$menu->url==null ? translate('no url') : $menu->url }}   </td>
    <td><span class="status-icon bg-success"></span> {{$menu->status ==1 ? translate('work') : translate('unwork') }}</td>
    <td class="text-left">

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.slider.edit',$menu->slug)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}}</a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.slider.delete',$menu->slug)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('Delete')}} </a>
    </span>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div></div></div>
        </div>
    </div>
@endsection
