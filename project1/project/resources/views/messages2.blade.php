@extends('layouts.app')

{{--@section('content')--}}
{{--    <h1> messages</h1>--}}
{{--<div class="alert alert-info">--}}
{{--    <h1>{{$data->name}}</h1>--}}
{{--</div>--}}
{{--@endsection--}}
@section('content')
    <h1> messages</h1>
    @foreach($data as $el)
<div class="alert alert-info">
    <h1>{{$el->name}}</h1>
    <a href="#"><button class="btn btn-warning">podrobno</button></a>
</div>
    @endforeach
@endsection
{{--@section('content')--}}
{{--@foreach($data as $el)--}}
{{--    <div class="alert alert-info">--}}
{{--        <h1>{{$el->email}}</h1>--}}
{{--    </div>--}}

{{--@endforeach--}}
{{--@endsection--}}
