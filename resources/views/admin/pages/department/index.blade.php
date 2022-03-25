

@extends('admin.layout.app')

@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('department')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
                    <a href="{{route('admin.department.create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('department')}}</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                            <tr>
                                <th> {{translate('name')}} </th>
                                <th> {{translate('description')}} </th>


                                <th> {{translate('status')}} </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach( App\Models\Department::all() as $department  )
                                <tr>
                                <span>
                                <td><a href="" class="text-inherit">{{$department->name }}</a></td>
                                <td><a href="" class="text-inherit">{{$department->description }}</a></td>


                                <td>{{(boolean) $department->status }}</td>
                                <td class="text-left">

                                    <a class="icon" href="javascript:void(0)"></a>
                                    <a href="{{route('admin.department.edit', $department->id)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}} </a>

                                    <a class="icon" href="javascript:void(0)"></a>
                                    <a href="{{route('admin.department.delete', $department->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('delete')}} </a>
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

