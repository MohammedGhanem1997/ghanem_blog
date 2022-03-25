

@extends('admin.layout.app')

@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">{{translate('currency')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{translate('Home')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
                    <a href="{{route('admin.currency.create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('currency')}}</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">



                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                            <tr>
                                <th> {{translate('name')}}</th>


                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach( App\Models\Currency::all() as $item  )
                                <tr>
    <span>
    <td><a href="store.html" class="text-inherit">{{translation($item->title) }}</a></td>

    <td class="text-left">
  <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.currency.edit',$item->id)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> {{translate('edit')}}</a>


        <a class="icon" href="javascript:void(0)"></a>
        <a href="{{route('admin.currency.delete',$item->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('delete')}}</a>
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




