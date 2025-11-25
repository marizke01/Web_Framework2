@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Login</h2>

    @if ($errors->has('loginError'))
        <div class="alert alert-danger">{{ $errors->first('loginError') }}</div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email') }}">
            @error('email') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control">
            @error('password') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <button class="btn btn-success">Login</button>
        <a href="{{ route('register.form') }}">Belum punya akun?</a>
    </form>
</div>
@endsection
