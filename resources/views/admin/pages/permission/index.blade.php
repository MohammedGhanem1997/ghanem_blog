

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}"> {{translate('Home')}} </a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('permission')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20" id="printthis" >
                <div class="card-header">

                        <a href="{{route('admin.groups.create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('group')}}</a>

                    <a href="{{route('admin.roles.create')}}" class="btn-info btn h-auto m-3 ">{{translate('Create')}} {{translate('role')}}</a>
                    <a href="{{route('admin.permissions.create')}}" class="btn-primary btn h-auto m-3 pr-3 pl-3 " id="print"><i class="fa fa-pencil "></i> {{translate('Create')}} {{translate('permission')}} </a>

                    <a href="#" class="btn-primary btn h-auto m-3 pr-3 pl-3 " id="print"><i class="fa fa-file-excel-o"></i> </a>

                </div>
                <div class="card-body">

            <div class="table-responsive p-4 ">


                <table id="example" class="table table-striped table-bordered " >
                    <thead>
                    <tr>
                        <th> #</th>
                        <th> {{translate('name')}} {{translate('permission')}} </th>
                        <th>{{translate('guard type')}}</th>
                        <th>{{translate('status')}}</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>




                    @foreach( Spatie\Permission\Models\Permission::all() as $permission  )
                        <tr>

    <td><a href="#" class="text-inherit">{{$permission->id }}</a></td>

    <td><span class="status-icon bg-success"></span> {{$permission->name}}</td>
    <td><span class="status-icon bg-success"></span> {{$permission->guard_name}}</td>
    <td><span class="status-icon bg-success"></span> {{$permission->status ==1 ? translate('work') : translate('unwork') }}</td>
    <td class="text-left">
         <span>

<a class="icon" href="#"></a>
        <a href="{{route('admin.permissions.edit',$permission->id)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}} {{translate('status')}} {{$permission->status ==1 ? translate('work') : translate('unwork') }}</a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.permissions.delete',$permission->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('Delete')}} </a>
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
