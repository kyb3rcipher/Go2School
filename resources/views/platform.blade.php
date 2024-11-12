<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Platform</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/logo.svg">

    <!-- Style -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])   {{-- Laravel resources (boostrap) --}}
    <link rel="stylesheet" href="css/platform.css">
</head>
<body class="d-flex flex-nowrap">
<nav class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" style="width: 280px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
        <img src="images/logo.svg" class="bi pe-none me-2" width="40" height="32">
        <span class="fs-4">{{ config('app.name') }}</span>
    </a>

    <hr>

    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item"> <a href="#" class="nav-link active" aria-current="page"> <i class="bi bi-house me-2"></i> Home </a> </li>
        
        <li> <a href="#" class="nav-link link-body-emphasis"> <i class="bi bi-people me-2"></i> Students </a> </li>
        
        <li> <a href="#" class="nav-link link-body-emphasis"> <i class="bi bi-person-workspace me-2"></i> Personal </a> </li>

        <li> <a href="#" class="nav-link link-body-emphasis"> <i class="bi bi-book me-2"></i> Library </a> </li>
    </ul>

    <hr>

    <div class="dropdown">
        <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>Director</strong>
        </a>

        <ul class="dropdown-menu text-small shadow">
            <li><a class="dropdown-item" href="#">New project...</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
    </div>
</nav>

<main class="b-divider b-vr">
    
</main>

</body>
</html>