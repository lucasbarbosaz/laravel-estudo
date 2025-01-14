@extends('admin.layouts.app')
@section('title', 'Detalhes do Usuário - ' . $user->name)
@section('content')

<h1>Detalhes do usuário</h1>
<ul>
    <li>Nome: {{ $user->name }}</li>
    <li>E-mail: {{ $user->email }}</li>
</ul>
<x-alert/>

<!-- @can('is-owner', $user)
    pode deletar
@endcan -->

@can('is-admin')
<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Deletar este usuário</button>
</form>
@endcan

@endsection