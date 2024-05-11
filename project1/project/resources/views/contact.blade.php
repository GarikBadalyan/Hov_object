@extends('layouts.app')

@section('content')
<h1>sa contacti stranican e</h1>
<form action="{{route('nar')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="name">введите имя</label>
        <input type="text" name="name" placeholder="введите имя" id="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" placeholder="введите email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject">тема сообщения </label>
        <input type="text" name="subject" placeholder="тема сообщения " id="subject" class="form-control">
    </div>
    <div class="form-group">
        <label for="message">сообщения </label>
        <textarea name="message" id="message" class="form-control" placeholder="введите сообщения"></textarea>
    </div>
    <button type="submit" class="btn btn-success">отправить </button>
</form>
@endsection
