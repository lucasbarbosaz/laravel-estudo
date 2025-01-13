@extends('admin.layouts.app')
@section('title', 'Criar novo usuário')
@section('content')

<h1>Novo usuário</h1>

@if ($errors->any()) <!-- errors é uma variável global do Laravel que contém os erros de validação -->
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('users.store') }}" method="POST">
    @csrf() <!-- csrf é uma diretiva do blade que gera um token de segurança -->
    <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}"/> <!-- old é uma função do Laravel que retorna o valor anterior de um campo -->
    <input type="email" name="email" placeholder="E-mail" value="{{ old('email') }}"/>
    <input type="password" name="password" placeholder="Senha"/>
    <button type="submit">Cadastrar</button>
</form>

@endsection