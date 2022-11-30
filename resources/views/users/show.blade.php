@extends('layouts.app')

@section('title', 'Detalhe do Usuário')

@section('content')
<h1>Litagem do usuário {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('users.destroy', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <button>Deletar</button>
</form>

@endsection