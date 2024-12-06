@extends('layouts.home')

@section('title', 'The future school')
@section('content')
{{-- Hero --}}
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text">Modernize your school and keep better control</div>
                <div class="buttons">
                    <a href="{{ route('login') }}" class="btn btn-primary">Go to Platform</a>
                    <a href="#" class="btn btn-outline-secondary ms-3">Test a preview</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="images/home/hero-image.svg" alt="hero-image" class="w-100">
            </div>
        </div>
    </div>

    <a id="down-arrow" href="#features"><div></div></a>
</section>

{{-- Setup --}}
<section id="features" class="features">
    <div class="container">
        <div class="text-header text-center">
            <h2>The best option</h2>
            <p>We are not just another platform for the control and management of your school. We are not a platform, Go2Trade <strong>IS the platform.</strong></p>
        </div>
        <div class="items text-center">
            <div class="row">

                <div class="col-md-4">
                    <div class="icons">
                        <img src="images/home/icon-1.svg" alt="icons">
                    </div>
                    <div class="desc">
                        <h5>Control your students</h5>
                        <p>Monitor your students' grades, school entrances and exits, behavior reports, student information <strong>and more</strong>.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icons">
                        <img src="images/home/icon-2.svg" alt="icons">
                    </div>
                    <div class="desc">
                        <h5>Manage your school</h5>
                        <p>Control your school in a more modern way. Create schedules dynamically for both students and teachers. Control teacher attendance at classes. And manage in a <strong>more efficient way</strong>.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icons">
                        <img src="images/home/icon-3.svg" alt="icons">
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

{{-- Information --}}
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
                <img src="images/home/image-1.svg" alt="image-1" class="w-100">
            </div>
        </div>

        <div class="row info-2">
            <div class="col-md-6">
                <img src="images/home/image-2.svg" alt="image-2" class="w-100">
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
        <div class="accordion">
            
            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Is the installation complicated?</button></h2>
                <div id="collapseOne" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>No</strong>. The installation would be completed in a maximum of 3 days (depending on the number of students), <code>we recommend</code> doing it during a vacation period to start a school term with all your new technology.
                </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Can I access from my smartphone?</button></h2>
                <div id="collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>Yes</strong>. you can access Go2Trade from any device with Internet; the platform dynamically adapts to any type and size of screen.
                </div>
                </div>
            </div>
            
            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Do I need my school to have internet?</button></h2>
                <div id="collapseThree" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <strong>Not</strong> necessarily. We can install the platform locally but it will only work within your school.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Can I request a demo of the platform??</button></h2>
                <div id="collapseFour" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        Of course. You can request a completely free demonstration of the platform <a href="#">here</a>.
                    </div>
                </div>
            </div>

            </div>
    </div>
</section>
@endsection