@extends('layouts.main')
@section('title', 'KW Teste - Editar usuario {{$users->nome}}')
@section('content')
<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Editando usuário: {{$users->name}}</h1>
    <form action="/update/{{$users->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Usuario:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}">
        </div>

        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="text" class="form-control" id="email" name="email" value="{{$users->email}}">
        </div>
        <input type="submit" class="btn btn-primary" value="Editar usuário">
    </form>
</div>
@endsection