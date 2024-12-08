<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>@yield('title', 'Dashboard')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/images/logo.svg">

    <!-- Style -->
    @livewireStyles
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])   {{-- Laravel resources (boostrap) --}}
    <link rel="stylesheet" href="/css/global.css">
    <link rel="stylesheet" href="/css/platform-admin.css">
    @stack('css')
</head>
<body id="wrapper">
    <nav class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary" id="sideBar">
        <div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto ">
            <a href="/" class="link-body-emphasis text-decoration-none">
                <img src="/images/logo-black.svg" class="bi pe-none me-2" width="40" height="32">
                <strong><span class="fs-4">{{ config('app.name') }}</span></strong>
            </a>

            <div class="position-absolute top-1 end-0 m-2">
                <button class="btn btn-outline-secondary rounded-circle border-0" id="sidebarToggle"><i class="bi bi-caret-left"></i></button>
            </div>
        </div>
        
        <hr>
    
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item"> <a href="{{ route('platform-admin.index' )}}" @class(['nav-link', 'active' => request()->routeIs('platform-index'), 'link-body-emphasis']) wire:navigate> <i class="bi bi-house me-2"></i> Home</a> </li>
            <li> <a href="/platform/students" @class(['nav-link','active' => request()->routeIs('students*'), 'link-body-emphasis']) wire:navigate> <i class="bi bi-people me-2"></i> Students</a> </li>
            <li> <a href="{{ route('teachers.index') }}" @class((['nav-link', 'active' => request()->routeIs('teachers*') ||  request()->routeIs('classrooms*')|| request()->routeIs('subjects*'), 'link-body-emphasis'])) wire:navigate> <i class="bi bi-person-video3 me-2"></i> Teachers</a> </li>
            {{--<li> <a href="{{ route('library.list') }}"  @class(['nav-link', 'active' => request()->routeIs('library*'), 'link-body-emphasis']) class="nav-link link-body-emphasis" wire:navigate> <i class="bi bi-book me-2"></i> Library </a> </li>--}}
        </ul>

        <hr>

        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/images/icons/profiles/profile-1.svg" alt="" width="32" height="32" class="rounded-circle me-2">
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

<div id="content-wrapper" class="d-flex flex-column min-vh-100">
    <nav class="navbar navbar-expand-lg navbar-light bg-white topbar mb-4 static-top shadow">
        <!-- Sidebar Toggle (Topbar) -->
        <button id="sidebarSmallToggleTop" class="btn btn-link d-md-none rounded-circle me-3">
            <i class="bi bi-list h3"></i>
        </button>

        <!-- Topbar Search -->
        <form class="d-none d-sm-inline-block form-inline me-auto ms-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
                <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="bi bi-search h6"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Topbar Navbar -->
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown no-arrow d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                    <form class="form-inline me-auto w-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                                placeholder="Search for..." aria-label="Search"
                                aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1" style="height: 0; width: 16px;">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-bell-fill text-gray-500"></i>
                    <!-- Counter - Alerts -->
                    <span class="badge badge-danger badge-counter">3+</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Alerts Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="me-3">
                            <div class="icon-circle bg-primary">
                                <i class="fas fa-file-alt text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 12, 2019</div>
                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="me-3">
                            <div class="icon-circle bg-success">
                                <i class="fas fa-donate text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 7, 2019</div>
                            $290.29 has been deposited into your account!
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="me-3">
                            <div class="icon-circle bg-warning">
                                <i class="fas fa-exclamation-triangle text-white"></i>
                            </div>
                        </div>
                        <div>
                            <div class="small text-gray-500">December 2, 2019</div>
                            Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1 pe-4" style=" width: 16px;">
                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="bi bi-envelope-fill text-gray-500"></i>
                    <!-- Counter - Messages -->
                    <span class="badge badge-danger badge-counter">7</span>
                </a>
                <!-- Dropdown - Messages -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                    <h6 class="dropdown-header">
                        Message Center
                    </h6>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image me-3">
                            <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                            <div class="text-truncate">
                                Hi there! I am wondering if you can help me with a
                                problem I've been having.
                            </div>
                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image me-3">
                            <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                alt="...">
                            <div class="status-indicator"></div>
                        </div>
                        <div>
                            <div class="text-truncate">
                                I have the photos that you ordered last month, how
                                would you like them sent to you?
                            </div>
                            <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image me-3">
                            <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                alt="...">
                            <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                            <div class="text-truncate">
                                Last month's report looks great, I am very happy with
                                the progress so far, keep up the good work!
                            </div>
                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                    </a>
                    <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image me-3">
                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                alt="...">
                            <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                            <div class="text-truncate">
                                Am I a good boy? The reason I ask is because someone
                                told me that people say this to all dogs, even if they aren't good...
                            </div>
                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                    </a>
                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="me-2 d-none d-lg-inline text-gray-600 small">Director</span>
                    <img class="img-profile rounded-circle" src="/images/icons/profiles/profile-1.svg">
                </a>
                
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw me-2 text-gray-400"></i>
                        Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw me-2 text-gray-400"></i>
                        Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw me-2 text-gray-400"></i>
                        Activity Log
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <main>
            @yield('content')
        </main>
    </div>

    <footer class="mt-auto container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
                <img src="/images/logo.svg" width="24" height="24">
            </a>
            <span class="mb-3 mb-md-0 text-body-secondary">&copy; 2024 GoToSchool</span>
        </div>
    
        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-twitter h5"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-instagram h5"></i></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><i class="bi bi-whatsapp h5"></i></a></li>
        </ul>
        </footer>
    </footer>
</div>

@livewireScripts
<script src="/js/script.js"></script>
@stack('js')
</body>
</html>