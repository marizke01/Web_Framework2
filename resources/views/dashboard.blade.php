@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Selamat Datang, {{ auth()->user()->name }}</h2>

    <a href="{{ route('logout') }}" class="btn btn-danger mt-3">Logout</a>
</div>
@endsection
