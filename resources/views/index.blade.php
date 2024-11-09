<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name') }} - The future school</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/logo.svg">
    
    <!-- Style -->
    <!-- Boostrap CDN --> <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
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
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">FAQs</a></li>
                    <li class="nav-item me-5"><a class="nav-link" href="#">About</a></li>
                    
                    <!--<li class="nav-item dropdown me-5">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown link</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>-->
                </ul>
                <a href="#" class="btn btn-outline-secondary shadow-sm d-sm d-block">Platform</a>
          </div>
        </div>
    </nav>
</header>
    
    <!-- Hero section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="text">Modernize your school and keep better control</div>
                    <div class="buttons">
                        <a href="#" class="btn btn-primary">Go to Platform</a>
                        <a href="#" class="btn btn-outline-secondary ms-3">Test a preview</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="/assets/img/hero-img.svg" alt="hero-image" class="w-100">
                </div>
            </div>
        </div>
    </section>

    <!-- Setup section -->
    <section id="features" class="setup">
        <div class="container">
            <div class="text-header text-center">
                <h3>The best option</h3>
                <p>We are not just another platform for the control and management of your school. We are not a platform, Go2Trade <strong>IS the platform.</strong></p>
            </div>
            <div class="items text-center">
                <div class="row">

                    <div class="col-md-4">
                        <div class="icons">
                            <img src="images/icons/icon-1.svg" alt="icons">
                        </div>
                        <div class="desc">
                            <h5>Control your students</h5>
                            <p>Monitor your students' grades, school entrances and exits, behavior reports, student information <strong>and more</strong>.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="icons">
                            <img src="images/icons/icon-2.svg" alt="icons">
                        </div>
                        <div class="desc">
                            <h5>Manage your school</h5>
                            <p>Control your school in a more modern way. Create schedules dynamically for both students and teachers. Control teacher attendance at classes. And manage in a <strong>more efficient way</strong>.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="icons">
                            <img src="images/icons/icon-3.svg" alt="icons">
                        </div>
                        <div class="desc">
                            <h5>Help for parents</h5>
                            <p>Help parents see their children's academic performance digitally in an easy way, help them see their attendance or request excuses for absences in <strong>a simple way</strong>.</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- Information section -->
    <!--<section class="information">
        <div class="container">

            <div class="row info-1">
                <div class="col md-6">
                    <div class="text-information">
                        <h5>Get more costumer for your bussniess</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit at aspernatur eaque! Blanditiis qui cumque unde voluptatum? Adipisci, autem.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="/assets/img/image-1.svg" alt="image-1" class="w-100">
                </div>
            </div>

            <div class="row info-2">
                <div class="col-md-6">
                    <img src="/assets/img/image-2.svg" alt="image-2" class="w-100">
                </div>
                <div class="col-md-6">
                    <div class="text-information">
                        <h5>Low budget high quality look profressional</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi impedit at aspernatur eaque! Blanditiis qui cumque unde voluptatum? Adipisci, autem.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>-->

    <!-- Footer section -->
    <footer class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
            <div class="col mb-3">
                <a href="/" id="logo" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none"><img src="images/logo-banner.png"></a>
                <p class="text-body-secondary">&copy; 2024 <a href="https://kyb3rcipher.com">Kyb3r Cipher</a></p>
            </div>
            <div class="col mb-3"></div>
      
            <div class="col mb-3">
                <h5>Product</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Features</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Pricing</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">FAQs</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">About</a></li>
                </ul>
            </div>
        
            <div class="col mb-3">
                <h5>Platform</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
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


    <!-- Boostrap CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>