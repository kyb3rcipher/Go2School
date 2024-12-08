<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/logo.svg">
    
    <!-- Style -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])   {{-- Laravel resources (boostrap) --}}
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/home.css">
    @stack('css')
    @livewireStyles <!-- Livewire styles -->
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <img src="images/logo-banner.png" alt="logo">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('home') }}" wire:navigate>Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home.pricing') }}" wire:navigate>Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="/#faqs">FAQs</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="{{ route('home.about') }}" wire:navigate>About</a></li>
                </ul>
                <a href="{{ route('login') }}" wire:navigate class="btn btn-outline-secondary shadow-sm d-sm d-block">Platform</a>
          </div>
        </div>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer class="container pt-0">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
        <div class="col mb-3">
            <a href="/" id="logo" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none"><img src="images/logo-banner.png"></a>
            <p class="text-body-secondary">&copy; 2024 <a href="https://kyb3rcipher.com">Kyb3r Cipher</a></p>
        </div>
        <div class="col mb-3"></div>
  
        <div class="col mb-3">
            <h5>Product</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="/" wire:navigate class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="/#features" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="/pricing" wire:navigate class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="/#faqs" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="/about" wire:navigate class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
        </div>
    
        <div class="col mb-3">
            <h5>Platform</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="/platform" wire:navigate class="nav-link p-0 text-body-secondary">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
            </ul>
        </div>
    
        <div class="col mb-3">
            <h5>Policies</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Terms</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Privacy</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Cookies Settings</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Guidelines</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Licenses</a></li>
            </ul>
        </div>

    </div>
</footer>


@stack('js')
<!-- Livewire scripts -->
@livewireScripts
</body>
</html>