

@extends('admin.layout.app')
@section('contain')



    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('admin')}}"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('footer menu')}}</li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">
                <div class="card-header">
                    <a href="{{route('admin.menu-footer.create')}}" class="btn-success btn h-auto m-3 ">{{translate('Create')}} {{translate('footer menu')}}</a>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table card-table table-vcenter text-nowrap">
                            <thead>
                            <tr>
                                <th> {{translate('name')}} </th>
                                <th> {{translate('image')}} </th>
                                <th> {{translate('url')}} </th>
                                <th> {{translate('status')}} </th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>




                            @foreach( App\Models\MenuFooter::all() as $menu  )
                                <tr>
                                <span>
                                <td><a href="" class="text-inherit">{{translation($menu->name) }}</a></td>
                                <td><a href="{{asset($menu->image )}}" class="text-inherit">{{$menu->image }}</a></td>
                                <td><a href="" class="text-inherit">{{$menu->url }}</a></td>
                                <td><a href="" class="text-inherit">{{$menu->status }}</a></td>

                                <td class="text-left">

                                    <a class="icon" href="javascript:void(0)"></a>
                                    <a href="{{route('admin.menu-footer.edit',$menu->slug)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}} </a>

                                    <a class="icon" href="javascript:void(0)"></a>
                                    <a href="{{route('admin.menu-footer.delete',$menu->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('delete')}} </a>
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

