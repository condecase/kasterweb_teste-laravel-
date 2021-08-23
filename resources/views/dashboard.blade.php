@extends('layouts.main')
@section('title', 'KW Teste - Dashboard')
@section('content')
<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Usuários cadastrados</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td scope="row">{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="edit/{{$user->id}}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>
                        <form action="delete/{{$user->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        @if($userLog->id == $user->id)
                        <span class="btn btn-warning btn-logado" style="cursor: auto;"><ion-icon name="star-outline"></ion-icon> Logado</span>
                        @else
                        
                        <button type="submit" class="btn btn-danger edit-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        @endif
                    </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection