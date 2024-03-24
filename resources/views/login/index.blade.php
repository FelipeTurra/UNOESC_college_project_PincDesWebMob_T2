@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div>
    <h1>Login</h1>
    <form method="POST" action="/login">
        @csrf
        <div class="mb-3">
            <label for="emailInput" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="emailInput" aria-describedby="emailHelp" name="email">
        </div>
        <div class="mb-3">
            <label for="passwordInput" class="form-label">Senha</label>
            <input type="password" class="form-control" id="passwordInput" aria-describedby="passwordHelp" name="password">
        </div>
        @error('loginError')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="d-grid gap-2 d-md-block text-end">
            <button type="submit" class="btn btn-success btn-sm">
                Entrar
            </button>
        </div>
    </form>
</div>
@endsection