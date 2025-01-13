@extends('admin.layouts.app') <!-- define o layout padrão que será utilizado para essa view -->
@section('title', 'Listagem dos Usuários') <!-- define o título da página que será incluído no layout padrão -->
@section('content') <!-- define o conteúdo que será incluído no layout padrão --> 

<h1>Usuários</h1>
<a href="{{ route('users.create') }} ">Adicionar usuário</a>

<x-alert/> <!-- inclui o componente de alerta -->

    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($users as $user) <!-- forelse é basicamente um foreach porém com um tratamento se não tiver registros -->
            <tr>
                <td>
                    {{ $user->name }}
                </td>
                <td>
                    {{ $user->email }}
                </td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
                </td>
            </tr>
            @empty <!-- caso não tenha encontrado nenhum registro -->
            <tr>
                <td colspan="100">Nenhum usuário encontrado.</td>
            </tr>
            @endforelse <!-- finaliza o forelse -->
        </tbody>
    </table>

    Total de registros: {{ $users->total() }}
    Página atual: {{ $users->currentPage() }}
    {{ $users->links() }} <!-- links() é um método que gera a paginação -->

@endsection <!-- finaliza o conteúdo que será incluído no layout padrão -->