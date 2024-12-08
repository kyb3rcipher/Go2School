@extends('layouts.platform-admin')

@section('title', 'View student')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person h2"></i> Student</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-admin.index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('students.list') }}" wire:navigate><i class="bi bi-person-lines-fill me-2"></i>Student List</a></li>
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
                                    @if (isset($student->photo))
                                        <img src="{ {asset('/storage' . $student->photo) }}" class="rounded-3 card-img-top" alt="Profile photo">
                                    @else
                                        <img src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=612x612&w=0&k=20&c=8ssXDNTp1XAPan8Bg6mJRwG7EXHshFO5o0v9SIj96nY=" class="rounded-3 card-img-top" alt="Profile photo">
                                    @endif
                                </div>
                                
                                <div class="card-body">
                                    <h5 class="card-title">{{ $student->name }} {{ $student->last_name}}</h5>
                                    <p class="card-text">#ID: {{ $student->id }}</p>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Gender: {{ $student->gender}}</li>
                                    <li class="list-group-item">Phone: {{ $student->phone }}</li>
                                    <li class="list-group-item"><button class="btn btn-primary">Check califications</button></li> 
                                </ul>
                            </div>
                        </div>

                        <div class="col-sm-8 col-md-9">
                            <div class="p-3 mb-3 border rounded bg-white">
                                <h6>Student Information</h6>
                                <table class="table table-responsive mt-3">
                                    <tbody>
                                        <tr>
                                            <th scope="row">First Name:</th>
                                            <td>{{ $student->name }}</td>
                                            <th>Last Name:</th>
                                            <td>{{ $student->last_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email:</th>
                                            <td>{{ $student->email }}</td>
                                            <th>Birthday:</th>
                                            <td>{{ $student->birthday }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td>{{ $student->address }}</td>
                                            <th></th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Blood Type:</th>
                                            <td>{{ $student->blood_type}}</td>
                                            <th>Phone:</th>
                                            <td>{{ $student->phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Gender:</th>
                                            <td colspan="3">{{$student->gender}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="p-3 mb-3 border rounded bg-white">
                                <h6>Parents' Information</h6>
                                <table class="table table-responsive mt-3">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Father's Name:</th>
                                            <td></td>
                                            <th>Mother's Name:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Father's Phone:</th>
                                            <td></td>
                                            <th>Mother's Phone:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Address:</th>
                                            <td colspan="3"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="p-3 mb-3 border rounded bg-white">
                                <h6>Academic Information</h6>
                                <table class="table table-responsive mt-3">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Class:</th>
                                            <td></td>
                                            <th>Board Reg. No.:</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Section:</th>
                                            <td colspan="3"></td>
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