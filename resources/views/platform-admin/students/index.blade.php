@extends('layouts.platform-admin')

@section('title', 'Students')

@section ('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-lines-fill"></i> Students</h1>

<div class="row align-items-md-stretch mt-4">
    <div class="col">

        <div class="d-flex justify-content-between">
            <fieldset class="border border-4 p-2 rounded-3 w-50 me-2">
                <legend class="float-none w-auto p-2">Carrers: <button class="btn btn-primary btn-circle btn-sm"><i class="bi bi-plus-lg" style="color: white; -webkit-text-stroke: 1px;" data-bs-toggle="modal" data-bs-target="#addCarrerModal"></i></button></legend>
                @livewire('carrer-list')
            </fieldset>

            <div class="card border-3 rounded-3 w-50 h-100" style="margin-top: 22px; width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Groups:</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <a href="{{ route('students.groups.index') }}" class="btn btn-primary btn-icon-split" wire:navigate><span class="icon text-white-50"><i class="bi bi-person-video2 h5"></i></span> <span class="text">Show groups</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="p-3 bg-white border border-3 rounded-3 h-100" style="margin-top: 23px;">
        <h3><a href="{{ route('students.list') }}" class="link-underline link-underline-opacity-0"  wire:navigate><i class="bi bi-person-fill h2"></i> Students</a></h3>

            <div>
                <span class="ps-2 me-2">Students: <code>{{ $totalStudents }}</code></span>
                <span class="badge rounded-pill border" style="background-color: #3568E9;">Mans: {{ $maleStudents }}</span>
                <span class="badge rounded-pill border" style="background-color: #3B96FF;">Womans: {{ $femaleStudents }}</span>
            </div>
                <div class="mt-3 d-flex align-items-center">
                    @php
                        $maleStudentPercentage = ($totalStudents > 0) ? round(($maleStudents / $totalStudents), 2) * 100 : '0';
                        $maleStudentPercentageStyle = "style='background-color: #3568E9; width: $maleStudentPercentage%'";

                        $femaleStudentPercentage = ($totalStudents > 0) ? round((($totalStudents - $maleStudents)/$totalStudents), 2) * 100 : '0';
                        $femaleStudentPercentageStyle = "style='background-color: #3B96FF; width: $femaleStudentPercentage%'";
                    @endphp
                    <div class="col progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" {!! $maleStudentPercentageStyle !!} aria-valuenow="{{$maleStudentPercentage}}" aria-valuemin="0" aria-valuemax="100">{{ $maleStudentPercentage ?? 0 }}%</div>
                        <div class="progress-bar progress-bar-striped" role="progressbar" {!! $femaleStudentPercentageStyle !!} aria-valuenow="{{$femaleStudentPercentage}}" aria-valuemin="0" aria-valuemax="100">{{ $femaleStudentPercentage ?? 0 }}%</div>
                    </div>
                </div>
            
        </div>
    </div>
</div>

<!-- Add new carrer modal -->
<div class="modal fade" id="addCarrerModal" tabindex="-1" aria-labelledby="addCarrerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addCarrerModal">Add new carrer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            @livewire('carrer-create')
        </div>
    </div>
</div>
@endsection