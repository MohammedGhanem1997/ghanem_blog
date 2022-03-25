@extends('admin.layout.app')
@section('contain')


    <!-- App-Content-->
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">

            <!-- Page-Header-->
            <div class="page-header">
                <h1 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/admin"> {{  translate( 'home')}}  </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{translate('Main Categories')}}</li>


                    </ol>
                </h1>

            </div>
            <!--/ Page-Header-->

            <div class="row ">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body p-0">





                            <div class="table-responsive p-4 ">


                                <table id="example" class="table table-striped table-bordered " >
                                    <thead>
                                    <tr>
                                        <th> #</th>
                                        <th> {{ translate( 'name')}} </th>
                                        <th>{{ translate( 'image')}}</th>
                                        <th>{{  translate( 'status')}}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( \App\Models\MainCategory::all() as $category)
                                        <tr>

                                            <td><a href="#" class="text-inherit">{{$loop->index }}</a></td>

                                            <td><span class="status-icon bg-success"></span> {{translation($category->name) }}</td>
                                            <td><span class="status-icon bg-success"></span> <img src="{{asset($category->image)}}" height="40px" width="50px" alt=""></td>
                                            <td><span class="status-icon bg-success"></span> {{$category->status ==1 ? translate('work') : translate('unwork') }}</td>
                                            <td class="text-left">
                                                 <span>
                                                    <a class="icon" href="#"></a>
                                                    <a href="{{route('admin.main-category.edit',$category->slug)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> {{translate('edit')}} </a>

                                        <a class="icon" href="#"></a>
                                                <a href="{{route('admin.main-category.delete',$category->slug)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('delete')}} </a>
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
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>







@endsection
