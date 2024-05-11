@extends('layouts.app')

@section('content')
<h1> home page</h1>
<ul>


            {{$users}}


</ul>

@endsection
@section('aside')
@parent
    <h1>dopalnitelni text</h1>
@endsection
