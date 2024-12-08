@extends('layouts.platform-admin')

@section('title', 'Platform')

@section('content')
<div class="row">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 border-start border-primary border-5 shadow h-30 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">Students</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">1,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-fill h1 text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 border-start border-success border-5 shadow h-30 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">Teachers</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">1,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-workspace h1 text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 border-start border-info border-5 shadow h-30 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">Personal</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">1,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-person-standing h1 text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-0 border-start border-danger border-5 shadow h-30 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs fw-bold text-primary text-uppercase mb-1">Personal</div>
                        <div class="h5 mb-0 fw-bold text-gray-800">1,000</div>
                    </div>
                    <div class="col-auto">
                        <i class="bi bi-user h1 text-gray-500"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection