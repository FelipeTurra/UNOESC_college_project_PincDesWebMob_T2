@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<div>
    <h1>Novo Usuário</h1>
    <form method="POST" action="/create/store">
        @csrf
        <div class="mb-3">
            <label for="nameInput" class="form-label">Nome</label>
            <input type="name" class="form-control" id="nameInput" aria-describedby="nameHelp" name="name">
            <div id="nameHelp" class="form-text">Por favor, informe seu nome completo.</div>
        </div>
        <div class="mb-3">
            <label for="emailInput" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">Por favor, informe seu e-mail.</div>
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Senha</label>
            <input type="password" class="form-control" id="passwordInput" aria-describedby="passwordHelp" name="password">
            <div id="passwordHelp" class="form-text">Por favor, crie uma senha.</div>
        </div>
        <div class="d-grid gap-2 d-md-block text-end">
            <button type="submit" class="btn btn-success btn-sm">
                Criar
            </button>
            <a class="btn btn-secondary btn-sm" href="/users" role="button">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection