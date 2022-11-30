@extends('layouts.app')

@section('title', 'Novo Usuário')

@section('content')
<h1>Novo Usuário</h1>

<form action="{{ route('users.store') }} " method="post">
    @csrf
    <input type="text" name="name" id="name" placeholder="Nome:">
    <input type="email" name="email" id="email" placeholder="E-mail:">
    <input type="password" name="password" id="password" placeholder="Senha:">
    <button type="submit">
        Enviar
    </button>
</form>
@endsection