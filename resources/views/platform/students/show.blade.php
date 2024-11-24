@extends('layouts.platform')

@section('title', 'Students')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Show Students</h1>
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
                <a href="#" class="btn btn-primary">View <i class="bi bi-eye h5"></i></a>
            </div>
        </div>
    </div>
    @endforeach 
</div>
@endsection