@extends('admin.layouts.app')
@section('title', 'Criar novo usuário')
@section('content')

<h1>Novo usuário</h1>

<x-alert/> <!-- inclui o componente de alerta -->

<form action="{{ route('users.store') }}" method="POST">
    @include('admin.users.partials.form')
</form>

@endsection