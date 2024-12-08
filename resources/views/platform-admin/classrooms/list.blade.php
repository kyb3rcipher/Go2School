@extends('layouts.platform-admin')

@section('title', 'List Classrooms')

@section('content')
<div class="d-flex align-items-center mb-3 justify-content-between">
    <h1 class="h3 text-gray-800 mb-0"><i class="bi bi-person-rolodex me-2"></i> List Classrooms</h1>
</div>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-admin.index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}" wire:navigate><i class="bi bi-people me-2"></i>Teachers</a></li>
        <li class="breadcrumb-item active">Teachers List</li>
    </ol>
</nav>


<div class="mb-4 p-3 bg-white border shadow-sm">
    @livewire('classroom-table')
</div>
@endsection