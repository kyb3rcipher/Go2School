@extends('layouts.platform-admin')

@section('title', 'View teacher')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person h2"></i> Teacher</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}" wire:navigate><i class="bi bi-person-lines-fill me-2"></i>Teachers</a></li>
        <li class="breadcrumb-item active">Profile</li>
    </ol>
</nav>

<div class="row">
    <div class="col-xs-11 col-sm-11 col-md-11 col-lg-10 col-xl-10 col-xxl">
        <div class="row pt-2">
            <div class="col">
                <div class="mb-4">
                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="card bg-light">
                                <div class="px-2 pt-2">
                                    @if (isset($teacher->photo))
                                        <img src="{ {asset('/storage' . $teacher->photo) }}" class="rounded-3 card-img-top" alt="Profile photo">
                                    @else
                                        <img src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=612x612&w=0&k=20&c=8ssXDNTp1XAPan8Bg6mJRwG7EXHshFO5o0v9SIj96nY=" class="rounded-3 card-img-top" alt="Profile photo">
                                    @endif
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $teacher->name }} {{ $teacher->last_name}}</h5>
                                    <p class="card-text">#ID: {{ $teacher->id }}</p>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Gender: {{ $teacher->gender}}</li>
                                    <li class="list-group-item">Phone: {{ $teacher->phone }}</li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-8 col-md-9">
                            <div class="p-3 mb-3 border rounded bg-white">
                                <h6>Teacher Information</h6>
                                <table class="table table-responsive mt-3">
                                    <tbody>
                                        <tr>
                                            <th scope="row">First Name:</th>
                                            <td>{{ $teacher->name }}</td>
                                            <th>Last Name:</th>
                                            <td>{{ $teacher->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email:</th>
                                            <td>{{ $teacher->email }}</td>
                                            <th>Phone:</th>
                                            <td>{{ $teacher->phone }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td>{{ $teacher->address }}</td>
                                            <th></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Birthday:</th>
                                            <td>{{ $teacher->birthday }}</td>
                                            <th>Gender:</th>
                                            <td>{{ $teacher->gender }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection