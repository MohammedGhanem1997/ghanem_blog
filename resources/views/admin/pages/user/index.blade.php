

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}">{{translate('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('add user ')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
                    <a href="{{url('admin/employee/create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} </a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">


                        <table  id="table" class="table card-table table-vcenter text-nowrap">
                            <thead>
                            <tr>
                                <th> #</th>
                                <th> {{translate('name')}}</th>
                                <th>{{translate('email')}}</th>

                                <th>{{translate('status')}}</th>
                                <th> <i class="fa fa-times-circle-o"></i> </th>

                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach( \App\Models\User::all() as $employee  )
                                <tr>

                                    <td><a href="#" class="text-inherit">{{$employee->id }}</a></td>
                                    <td><span class="status-icon bg-success"></span> {{$employee->name}}</td>

                                    <td><span class="status-icon bg-success"></span> {{$employee->email}}</td>
                                    <td><span class="status-icon bg-success"></span> {{$employee->status}}</td>
                                    <td><span class="status-icon bg-success"></span> {{$employee->email_verified_at}}</td>


                                    <td class="text-left">
         <span>
        <a class="icon" href="javascript:void(0)"></a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.user.edit',$employee->id)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}} {{translate('status')}} {{$employee->status ==1 ? translate('work') : translate('unwork') }}</a>

        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.user.delete',$employee->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('Delete')}}</a>
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

