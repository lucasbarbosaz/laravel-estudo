@extends('admin.layouts.app')
@section('title', 'Editando o Usuário ' . $user->name) <!-- define o título da página que será incluído no layout padrão -->
@section('content')

<h1>Editar o usuário {{ $user->name }}</h1>

<x-alert/> <!-- inclui o componente de alerta -->

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf() <!-- csrf é uma diretiva do blade que gera um token de segurança -->
    @method('PUT') <!-- method é uma diretiva do blade que define o método HTTP que será utilizado -->
    <input type="text" name="name" placeholder="Nome" value="{{ $user->name }}"/> <!-- old é uma função do Laravel que retorna o valor anterior de um campo -->
    <input type="email" name="email" placeholder="E-mail" value="{{ $user->email }}"/>
    <input type="password" name="password" placeholder="Senha"/>
    <button type="submit">Atualizar</button>
</form>

@endsection