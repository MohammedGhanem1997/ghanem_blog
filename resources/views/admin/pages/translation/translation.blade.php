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
                        <li class="breadcrumb-item active" aria-current="page">{{translate('translation')}}</li>


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
                                        <th>{{ translate( 'arabic')}}</th>
                                        <th>{{  translate( 'english')}}</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach( \App\Models\translate::all() as $translate)
                                        <tr>

                                            <td><a href="#" class="text-inherit">{{$loop->index }}</a></td>

                                            <td><span class="status-icon bg-success"></span> {{$translate->title}}</td>
                                            <td><span class="status-icon bg-success"></span> {{$translate->translate['ar']}}</td>
                                            <td><span class="status-icon bg-success"></span> {{$translate->translate['en']}}</td>
                                            <td class="text-left">
         <span>

<a class="icon" href="#"></a>
        <a href="{{route('admin.translate.edit', $translate->title)}}" class="btn btn-green btn-sm"><i class="fa fa-link"></i> {{translate('edit')}} </a>

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
