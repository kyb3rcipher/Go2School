@extends('layouts.home')

@push('js')
    <script src="js/script.js"></script>    
@endpush

@section('title', 'Pricing')
@section('content')
<section class="container">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <div id="liveAlertPlaceholder"></div>
        
        <h1 class="display-4 fw-normal text-body-emphasis">Pricing</h1>
        <p class="fs-5 text-body-secondary">We offer multiple plans that adapt depending on your school. If you need a personalized plan or something special for you, you can request it without any problem.</p>
    </div>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3"><h4 class="my-0 fw-normal">Normal</h4></div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$2,000<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>2000 students accounts</li>
                        <li>1500 Teachers/School Staff</li>
                        <li>Partial customization of the system</li>
                        <li>Remote assistance</li>
                    </ul>
                    <button type="button" id="liveAlertBtn" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3"><h4 class="my-0 fw-normal">Pro</h4></div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$3,000<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>5000 students</li>
                        <li>Unlimited Teachers/School Staff</li>
                        <li>Complete system customization</li>
                        <li>In-person assistance</li>
                    </ul>
                    <button type="button" id="liveAlertBtn" class="w-100 btn btn-lg btn-primary">Get started</button>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-4 rounded-3 shadow-sm border-primary">
                <div class="card-header py-3 text-bg-primary border-primary"><h4 class="my-0 fw-normal">Max</h4></div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$5,000<small class="text-body-secondary fw-light">/mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>Unlimited students</li>
                        <li>Unlimited Teachers/School Staff</li>
                        <li>Complete system customization</li>
                        <li>In-person and remote assistance</li>
                    </ul>
                    <button type="button" id="liveAlertBtn" class="w-100 btn btn-lg btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection