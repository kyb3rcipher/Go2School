@extends('layouts.platform')

@section('title', 'Students')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi bi-people-fill"></i> Students List</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-index') }}" wire:navigate>Home</a></li>
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

<div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
    @foreach ($students as $student)
    <div class="col d-flex justify-content-center">
        <div class="card" style="width: 18rem;">
            <img src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=612x612&w=0&k=20&c=8ssXDNTp1XAPan8Bg6mJRwG7EXHshFO5o0v9SIj96nY=" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $student->name }} {{ $student->last_name }}</h5>
                <p class="card-text">
                    Grade: {{ $student->group->grade ?? 'Without grade' }}° <br>
                    Group: {{ $student->group->group ?? 'Without group' }} <br>
                    Carrer: {{ $student->group->carreer ?? 'Without carreer' }} <br>
                </p>
                <a class="btn btn-primary" href="{{ route('students.view', ['id' => $student->id]) }}" wire:navigate>View <i class="bi bi-eye h5"></i></a>
            </div>
        </div>
    </div>
    @endforeach 
</div>
@endsection