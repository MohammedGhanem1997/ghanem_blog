


<div class="mt-0 mb-0  mt-3"  >
@if ($messages = Session::get('success'))
<div class="pr-10" >

<div class="alert alert-success alert-block  " style="z-index: 39; position: fixed; left: 30%; width: 50%  ">

    <div class="row ">
        <br>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $messages }} </strong>
    </div>

</div>
</div>
@endif
@if ($messages = Session::get('errors'))

<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $messages}} </strong>
</div>
{{----}}
@endif


@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
@if ($message = Session::get('info'))
<div class="alert alert-info alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif
{{--@if (  isset($errors) )--}}
{{--<div class="alert alert-danger">--}}



{{--        <ul>--}}

{{--            @foreach ($errors->all() as $error)--}}
{{--                <li></li>--}}
{{--                <button type="button" class="close" data-dismiss="alert">×</button>--}}
{{--                {{ $error }}--}}

{{--            @endforeach--}}
{{--        </ul>--}}

{{--</div>--}}

{{--@endif--}}
</div>
