@extends('admin.layouts.app')
@section('title', 'Editando o Usuário ' . $user->name) <!-- define o título da página que será incluído no layout padrão -->
@section('content')

<h1>Editar o usuário {{ $user->name }}</h1>

<x-alert/> <!-- inclui o componente de alerta -->

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @method('PUT') <!-- method é uma diretiva do blade que define o método HTTP que será utilizado -->
    @include('admin.users.partials.form')
</form>

@endsection