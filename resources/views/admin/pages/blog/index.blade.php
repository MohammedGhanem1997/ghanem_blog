@extends('admin.layout.app')
@section('contain')


    <!-- App-Content-->
    <div class="app-content  my-3 my-md-5">
        <div class="side-app">

            <!-- Page-Header-->
            <div class="page-header">
                <h1 class="page-title">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}"> {{  translate( 'home')}}  </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{translate('view articles')}}</li>


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

                                        <th>{{  translate( 'category')}}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( \App\Models\Blog::all() as $article)
                                        <tr>

                                            <td><a href="#" class="text-inherit">{{$loop->index }}</a></td>

                                            <td><span class="status-icon bg-success"></span> {{translation($article->title) }}</td>

                                            <td><span class="status-icon bg-success"></span> {{translation($article->title) }}</td>
                                            <td class="text-left">
                                                 <span>
                                                    <a class="icon" href="#"></a>
                                                    <a href="{{route('admin.blog.edit',$article->slug)}}" class="btn btn-info btn-sm"><i class="fa fa-edit"></i> {{translate('edit')}} </a>


                                                <a class="icon" href="javascript:void(0)"></a>
                                                <a href="{{route('admin.blog.delete',$article->id)}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i> {{translate('Delete')}} </a>
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
