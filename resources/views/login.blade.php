@extends('layouts.home')

@push('css') <link rel="stylesheet" href="css/login.css"> @endpush

@section('content')
<form action={{ route('auth') }} method="POST" class="form-signin w-100 m-auto mt-5">
    @csrf
    <img class="mb-4" src="/images/logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Sign in</h1>

    <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
        <label for="floatingPassword">Password</label>
    </div>

    <div class="form-check text-start my-3">
        <input class="form-check-input" type="checkbox" name="remember" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">Remember me</label>
    </div>

    <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
    <p class="mt-4 text-body-secondary">&copy; 2024</p>
</form>
@endsection