@extends('layouts.platform-user')

@section('content')
<div class="card border border-primary border-2 bg-primary my-3">
    <a href="avisos?push=true" class="card-body text-white link-underline link-underline-opacity-0">
        <div class="list-group-item list-group-item-action d-flex justify-content-between align-items-start">
            <div class="fs-5">
                <i class="bi bi-bell-fill h5 me-1"></i>
                <span>Activate notifications</span>
            </div>
        </div>
    </a>
</div>

<!--<div class="form-group my-3">
    <div class="input-group input-group-lg text-dark border border-primary border-2 rounded">
        <div class="form-floating">
            <input type="text" class="form-control" placeholder="Search here">
            <label>Search something?</label>
        </div>

        <button type="button" class="btn btn-light text-primary"><i class="bi bi-search h5" style="-webkit-text-stroke: 1px;"></i></button>
    </div>
</div>-->

<div class="mb-3">
    <h2 class="h2 font-weight-bold mb-3">Teachers</h2>

    <div class="row row-cols-2 row-cols-xl-5 g-2">
        <x-container-user link="{{ route('platform-teacher.profile.edit') }}" icon="person-vcard-fill" title="Update profile"/>

        <x-container-user link="{{ '/#' }}" icon="check2-all" title="Attendance"/>

        <x-container-user link="{{-- route('student-platform.grades') --}}" icon="journal-bookmark-fill" title="Grades"/>

        <x-container-user link="{{ '/#' }}" icon="clock-history" title="Absence notes"/>

        <x-container-user link="{{ '/#' }}" icon="x-square-fill" title="Conduct reports"/>

        <x-container-user link="{{ 'https://classroom.google.com' }}" icon="google" title="Classroom" spa="false"/>

        <x-container-user link="{{ '/#' }}" icon="people-fill" title="Family"/>

        <x-container-user link="{{ '/#' }}" icon="filetype-pdf" title="Academy history"/>
    </div>
</div>
@endsection