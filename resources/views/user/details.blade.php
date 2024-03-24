@extends('layouts.app')

@section('title', 'Detalhes do Usuário')

@section('content')
<div>
    <h1>Detalhes do Usuário</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $user->name }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $user->email }}</h6>
            <p class="card-text">Criado em {{ $user->created_at }}</p>
            <a class="btn btn-secondary btn-sm" href="/users" role="button">
                Voltar
            </a>
        </div>
    </div>
</div>
@endsection