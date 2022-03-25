

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}"> {{translate('Home')}} </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> كونترولار</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20" id="printthis" >
                <div class="card-header">

                    <a href="{{url('admin/group/create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('group')}}</a>

                    <a href="{{url('admin/role/create')}}" class="btn-info btn h-auto m-3 ">{{translate('Create')}} {{translate('role')}}</a>
                    <a href="#" class="btn-primary btn h-auto m-3 pr-3 pl-3 " id="print"><i class="fa fa-print "></i> </a><a href="#" class="btn-primary btn h-auto m-3 pr-3 pl-3 " id="print"><i class="fa fa-file-excel-o"></i> </a>

                </div>
                <div class="card-body">

                    <div class="table-responsive p-4 ">


                        <table id="example" class="table table-striped table-bordered " >
                            <thead>
                            <tr>
                                <th> #</th>
                                <th> {{translate('name')}}  </th>
                                <th>{{translate('status')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach( \App\Models\Controller::where('status','<>',2)->get() as $controller  )
                                <tr>

                                    <td><a href="#" class="text-inherit">{{$controller->id }}</a></td>

                                    <td><span class="status-1 bg-success"></span> {{$controller->name}}</td>
                                    <td><span class=" bg-success"></span> {{$controller->status ==1 ? translate('work') : translate('unwork') }}</td>
                                    <td class="text-left">
         <span>
<a class="icon" href="#"></a>
        <a href="{{route('admin.controller.show',$controller->name)}}" class="btn btn-info btn-sm"><i class="fa fa-eye-slash"></i> {{translate('show')}} </a>

<a class="icon" href="#"></a>
        <a href="{{route('admin.controller.edit',$controller->id)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}} {{translate('status')}} {{$controller->status ==1 ? translate('work') : translate('unwork') }}</a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.controller.delete',$controller->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('Delete')}} </a>
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
