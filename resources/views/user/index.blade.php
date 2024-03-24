@extends('layouts.app')

@section('title', 'Usuários')

@section('content')
<div>
    <h1>Usuários</h1>

    <div class="d-grid gap-2 d-md-block text-end">
        <a class="btn btn-success btn-sm" href="/create" role="button">
            Novo Usuário
        </a>
        <a class="btn btn-danger btn-sm" href="/logout" role="button">
            Sair
        </a>
    </div>

    <table class="table">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th></th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td class="text-end">
                <div class="d-grid gap-2 d-md-flex justify-content-end text-end">
                    <a class="btn btn-primary btn-sm" href="user/{{ $user->id }}" role="button">
                        Detalhes
                    </a>
                    <form action="user/{{ $user->id }}/delete" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            Excluir
                        </button>
                    </form>
                </div>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection