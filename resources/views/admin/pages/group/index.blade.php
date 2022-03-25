

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('group')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
                    <a href="{{route('admin.groups.create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('group')}}</a>
                    <a href="#" class="btn-primary btn h-auto m-3 pr-3 pl-3 " id="print"><i class="fa fa-print "></i> </a>

                </div>
                <div class="card-body" id="printthis">

                    <div class="table-responsive">


                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th> {{translate('name')}}</th>
                                <th>{{translate('guard type')}}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach( Spatie\Permission\Models\Role::where('groups',1)->get() as $role  )
                                <tr>

                                    <td><a href="#" class="text-inherit">{{$role->id }}</a></td>

                                    <td><span class="status-icon bg-success"></span> {{$role->name}}</td>

                                    <td><span class="status-icon bg-success"></span> {{$role->guard_name}}</td>
{{--                                    <td><span class="status-icon bg-success"></span> {{$role->permissions}}</td>--}}

                                    <td class="text-left">
         <span>


        <a class="icon" href="#"></a>
                <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.groups.employee',$role->id)}}" class="btn btn-info btn-sm"><i class="fa fa-user-plus"></i> {{translate('add employee')}} {{translate('group')}} </a>

        <a href="{{route('admin.groups.edit',$role->name)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('permission')}} {{translate('group')}} </a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.roles.delete',$role->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('delete')}} </a>
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

