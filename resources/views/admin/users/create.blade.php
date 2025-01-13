@extends('admin.layouts.app')
@section('title', 'Criar novo usuário')
@section('content')

<h1>Novo usuário</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf() <!-- csrf é uma diretiva do blade que gera um token de segurança -->
    <input type="text" name="name" placeholder="Nome" />
    <input type="email" name="email" placeholder="E-mail" />
    <input type="password" name="password" placeholder="Senha" />
    <button type="submit">Cadastrar</button>
</form>

@endsection