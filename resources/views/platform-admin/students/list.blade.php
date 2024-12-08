@extends('layouts.platform-admin')

@section('title', 'Students')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi bi-people-fill"></i> Students List</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-admin.index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}" wire:navigate><i class="bi bi-people me-2"></i>Students</a></li>
        <li class="breadcrumb-item active">Students List</li>
    </ol>
</nav>

<h6>Filter by:</h6>
<div class="mb-4 mt-4">
    <form class="row" action="#" method="GET">
        <div class="col">
            <select onchange="" class="form-select" aria-label="Class" name="class_id" required>
                <option selected disabled>Select a grade</option>
            </select>
        </div>

        <div class="col">
            <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-counterclockwise"></i> Load List</button>
            <a href="{{ route('students.create') }}" type="button" class="btn btn-primary" wire:navigate><i class="bi bi bi-person-plus"></i> Register Student</a>
        </div>
    </form>
</div>

{{--@livewire('student-list')--}}
@endsection