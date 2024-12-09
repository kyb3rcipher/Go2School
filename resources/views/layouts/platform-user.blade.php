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
    <link rel="stylesheet" href="/css/global-user-platform.css">
    @stack('css')
    @livewireStyles <!-- Livewire styles -->
</head>
<body>
<body class="bg-body-tertiary">
    <header>
        <nav class="navbar border border-3 border-bottom border-0" style="background-color: #E97A35 !important;">
            <div class="container px-3">
                <span></span>
                <a href="/students" class="navbar-brand navbar-brand-top"><img src="/images/logo.svg" width="40px"></a>
                
                <button type="button" class="btn btn-light"><i class="bi bi-search"></i></button>
            </div>
        </nav>
    </header>
    
    <main class="container mb-2">
        @yield('content')
    </main>

    <!-- Bottom bar -->
    <nav class="navbar navbar-footer navbar-expand-lg fixed-bottom bg-white px-3 border-3 border-top border-start-0 border-end-0">
        <div class="container">
            <ul class="d-flex justify-content-between w-100 m-0 p-0">
                <a href="/student" class="btn btn-light fs-4 @class(['active' => request()->routeIs('student-platform.index')]) text-primary" data-bs-toggle="tooltip" title="Home" wire:navigate><i class="bi bi-house-door-fill h3"></i></a>

                <a href="/student/grades" class="btn btn-light fs-4 position-relative" data-bs-toggle="tooltip" title="Grades" wire:navigate><i class="bi bi-journal-bookmark-fill h3"></i></a>

                <a href="avisos" class="btn btn-light fs-4 position-relative" data-bs-toggle="tooltip" title="Notifications"><i class="bi bi-bell-fill h4"></i></a>

                <a href="/teacher/profile" class="btn btn-light" data-bs-toggle="tooltip" title="Student" wire:navigate>
                    <img src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=612x612&w=0&k=20&c=8ssXDNTp1XAPan8Bg6mJRwG7EXHshFO5o0v9SIj96nY=" class="rounded-circle mx-1" width="34px" height="34px">
                </a>
            </ul>
        </div>
    </nav>

@stack('js')
<!-- Livewire scripts -->
@livewireScripts
</body>
</html>