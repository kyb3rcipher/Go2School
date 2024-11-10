<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>{{ config('app.name') }} - The future school</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="images/logo.svg">
    
    <!-- Style -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])   {{-- Laravel resources (boostrap) --}}
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
                    <li class="nav-item"><a class="nav-link" href="#faqs">FAQs</a></li>
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

        <a id="down-arrow" href="#features"><div></div></a>
    </section>

    <!-- Setup section -->
    <section id="features" class="setup">
        <div class="container">
            <div class="text-header text-center">
                <h2>The best option</h2>
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
    <section class="information">
        <div class="container">

            <div class="row info-1">
                <div class="col md-6">
                    <div class="text-information">
                        <h5>Get more control over your school</h5>
                        <p>Say goodbye to creating schedules manually, viewing grades in a complicated way or registering students' entry and exit to the school. All that is a thing of the past. Join the best school management and control platform now.</p>
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
                        <h5>Low cost and easy use for everyone</h5>
                        <p>Unlike competitors, we offer affordable, student-based pricing and full support. Our user-friendly system requires no prior training, making it accessible for everyone.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- FAQs section --}}
    <section id="faqs" class="faqs">
        <div class="container">
            <div class="text-header text-center"><h2>FAQs</h2></div>
            <div class="accordion" id="accordionExample">
                
                <div class="accordion-item">
                  <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Is the installation complicated?</button></h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>No</strong>. The installation would be completed in a maximum of 3 days (depending on the number of students), <code>we recommend</code> doing it during a vacation period to start a school term with all your new technology.
                    </div>
                  </div>
                </div>

                <div class="accordion-item">
                  <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I access from my smartphone?</button></h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <strong>Yes</strong>. you can access Go2Trade from any device with Internet; the platform dynamically adapts to any type and size of screen.
                    </div>
                  </div>
                </div>
                
                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do I need my school to have internet?</button></h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <strong>Not</strong> necessarily. We can install the platform locally but it will only work within your school.
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Can I request a demo of the platform??</button></h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            Of course. You can request a completely free demonstration of the platform <a href="#">here</a>.
                        </div>
                    </div>
                </div>

              </div>
        </div>
    </section>
    
    
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
    
</body>
</html>