

@extends('admin.layout.app')
@section('contain')

<style>



    .cf:after { visibility: hidden; display: block; font-size: 0; content: " "; clear: both; height: 0; }
    * html .cf { zoom: 1; }
    *:first-child+html .cf { zoom: 1; }

    /*body { font-size: 100%; margin: 0; padding: 1.75em; font-family: 'Helvetica Neue', Arial, sans-serif; }*/

    h1 { font-size: 1.75em; margin: 0 0 0.6em 0; }

    a { color: #2996cc; }
    a:hover { text-decoration: none; }

    p { line-height: 1.5em; }
    .small { color: #666; font-size: 0.875em; }
    .large { font-size: 1.25em; }

    /**
     * Nestable
     */

    .dd { position: relative; display: block; margin: 0; padding-inline: 20%; padding: 0;  list-style: none; font-size: 13px; line-height: 20px; }

    .dd-list { display: block; position: relative; margin: 0; padding: 0; list-style: none; }
    .dd-list .dd-list { padding-right: 30px; }
    .dd-collapsed .dd-list { display: none; }

    .dd-item,
    .dd-empty,
   .dd-placeholder {        text-align:right; !important;
        display: block; position: relative; margin: 0; padding: 0; min-height: 20px; font-size: 13px; line-height: 20px; }

    .dd-handle { display: block; height: 30px; margin: 5px 0; padding: 5px 10px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
        background: #fafafa;
        background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
        background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
        background:         linear-gradient(top, #fafafa 0%, #eee 100%);
        -webkit-border-radius: 3px;
        border-radius: 3px;
        box-sizing: border-box; -moz-box-sizing: border-box;
    }
    .dd-handle:hover { color: #2ea8e5; background: #fff; }

    .dd-item > button { display: block; position: relative; cursor: pointer; float: right; width: 25px; height: 20px; margin: 5px 0; padding: 0; text-indent: 100%; white-space: nowrap; overflow: hidden; border: 0; background: transparent; font-size: 12px; line-height: 1; text-align: right; font-weight: bold; }
    .dd-item > button:before { content: '+'; display: block; position: absolute; width: 100%; text-align: left; text-indent: 0; }
    .dd-item > button[data-action="collapse"]:before { content: '-'; }

    .dd-placeholder,
    .dd-empty { margin: 5px 0; padding: 0; min-height: 30px; background: #f2fbff; border: 1px dashed #b6bcbf; box-sizing: border-box; -moz-box-sizing: border-box; }
    .dd-empty { border: 1px dashed #bbb; min-height: 100px; background-color: #e5e5e5;
        background-image: -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
        -webkit-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-image:    -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
        -moz-linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-image:         linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff),
        linear-gradient(45deg, #fff 25%, transparent 25%, transparent 75%, #fff 75%, #fff);
        background-size: 60px 60px;
        background-position: 0 0, 30px 30px;
    }

    .dd-dragel { position: absolute; pointer-events: none; z-index: 9999; }
    .dd-dragel > .dd-item .dd-handle { margin-top: 0; }
    .dd-dragel .dd-handle {
        -webkit-box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
        box-shadow: 2px 4px 6px 0 rgba(0,0,0,.1);
    }

    /**
     * Nestable Extras
     */

    .nestable-lists { display: block; clear: both; padding: 30px 0; width: 100%; border: 0; border-top: 2px solid #ddd; border-bottom: 2px solid #ddd; }

    #nestable-menu { padding: 0; margin: 20px 0; }

    #nestable-output,
    #nestable2-output { width: 100%; height: 7em; font-size: 0.75em; line-height: 1.333333em; font-family: Consolas, monospace; padding: 5px; box-sizing: border-box; -moz-box-sizing: border-box; }

    #nestable2 .dd-handle {
        color: #fff;
        border: 1px solid #999;
        background: #bbb;
        background: -webkit-linear-gradient(top, #bbb 0%, #999 100%);
        background:    -moz-linear-gradient(top, #bbb 0%, #999 100%);
        background:         linear-gradient(top, #bbb 0%, #999 100%);
    }
    #nestable2 .dd-handle:hover { background: #bbb; }
    #nestable2 .dd-item > button:before { color: #fff; }

    @media only screen and (min-width: 700px) {

        .dd {  width: 90%; }
        .dd + .dd { margin-left: 2%; }

    }
    .card {
        word-wrap: break-word;
        text-align: right; !important;
    }
    .dd-hover > .dd-handle { background: #2ea8e5 !important; }

    .dd3-content { display: block; height: 30px; margin: 5px 0; padding: 5px 10px 5px 40px; color: #333; text-decoration: none; font-weight: bold; border: 1px solid #ccc;
        background: #fafafa;
        background: -webkit-linear-gradient(top, #fafafa 0%, #eee 100%);
        background:    -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
        background:         linear-gradient(top, #fafafa 0%, #eee 100%);
        -webkit-border-radius: 3px;
        border-radius: 3px;
        box-sizing: border-box; -moz-box-sizing: border-box;
    }
    .dd3-content:hover { color: #2ea8e5; background: #fff; }

    .dd-dragel > .dd3-item > .dd3-content { margin: 0; }

    .dd3-item > button { margin-left: 30px; }

    .dd3-handle { position: absolute; margin: 0; left: 0; top: 0; cursor: pointer; width: 30px; text-indent: 100%; white-space: nowrap; overflow: hidden;
        border: 1px solid #aaa;
        background: #ddd;
        background: -webkit-linear-gradient(top, #ddd 0%, #bbb 100%);
        background:    -moz-linear-gradient(top, #ddd 0%, #bbb 100%);
        background:         linear-gradient(top, #ddd 0%, #bbb 100%);
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }
    .dd3-handle:before { content: '≡'; display: block; position: absolute;  top: 3px; width: 100%; text-align: right; text-indent: 0; color: #fff; font-size: 20px; font-weight: normal; }
    .dd3-handle:hover { background: #ddd; }

    /**
     * Socialite
     */

    .socialite { display: block;  height: 35px; }

</style>

    <div class="app-content my-3 my-md-5">
        <div class="side-app">
            <div class="page-header">
                <h4 class="page-title">
                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="/admin"> {{translate('Home')}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> {{translate('customize side menus')}}  </li>
                    </ol>
                </h4>

            </div>

            <div class="card m-b-20">

<div class="row">
                <a href="{{route('admin.customize.create')}}" class="btn-success btn h-auto w-15 ml-8 mr-8 mt-6 ">{{translate('Create')}} {{translate(' menu')}}</a>
                <a href="{{route('admin.customize.index')}}" class="btn-success btn h-auto w-15 ml-8 mr-8 mt-6 ">{{translate('show')}} {{translate('menus')}}</a>
            </div>

<div class="row text-gray ml-10 mr-8">


    <div class="cf nestable-lists">



        <div class="dd" id="nestable">
            <ol class="dd-list" >
                @foreach(\App\Models\SideOrder::where('main',0)->where('status',1)->orderBy('range', 'ASC')->get() as $order)
                    <li class="dd-item " data-id="{{ $order->id}}">
                        <div class="dd-handle ">{{translate($order->name)}} </div>

                        <span class="float-left ">  <a  class="" href="{{route('admin.customize.edit',$order->id)}}"><i class="pr-6  fa fa-edit"></i></a>     <a href="{{route('admin.customize.delete',$order->id)}}"><i class=" fa fa-trash-o"></i></a> </span>


                    <ol class="dd-list">
                        @foreach( \App\Models\SideOrder::where('main',$order->id)->where('status',1)->orderBy('range', 'ASC')->get() as $sub)
                        <li class="dd-item " data-id="{{ $sub->id}}">
                            <div class="dd-handle ">{{translate($sub->name)}}  <span class="float-left ">  <i class="pr-6  fa fa-edit"></i>     <i class=" fa fa-trash-o"></i> </span></div>


                            <ol class="dd-list">
                                @foreach( \App\Models\SideOrder::where('main',$sub->id)->where('status',1)->orderBy('range', 'ASC')->get() as $sub_sub)
                                    <li class="dd-item " data-id="{{ $sub_sub->id}}" >
                                        <div class="dd-handle ">{{translate($sub_sub->name)}} <span class="float-left ">  <i class="pr-6  fa fa-edit"></i>     <i class=" fa fa-trash-o"></i> </span></div>


                                    </li>


                                @endforeach
                            </ol>

                        </li>


                        @endforeach
                    </ol>
                </li>
                @endforeach
            </ol>
        </div>


    </div>
                </div>

                <form action="{{route('admin.customize.update')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="sort" id="nestable-output">


                    <div class="card-footer text-center">
                        <button type="submit" class="btn btn-primary pr-6 pl-6 waves-effect waves-light">{{  translate('update')}}</button>
                    </div>
                </form>
            </div>



        </div>
    </div>



@endsection

