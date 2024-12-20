@extends('layouts.platform-admin')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-rolodex"></i> Add Teacher</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}" wire:navigate><i class="bi bi-person-video3 me-2 h6"></i> Teachers</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Teacher</li>
    </ol>
</nav>

<div class="mb-4">
    <form class="row g-3" action="{{ route('teachers.update', $id) }}" method="POST" nctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}

        <div class="row g-3">
            <div class="col-md-3">
                <label for="inputName" class="form-label">First Name <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="name" value="{{ $teacher->name }}" name="name" placeholder="First Name" required">
            </div>

            <div class="col-md-3">
                <label for="inputLastName" class="form-label">Last Name <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="last_name" value="{{ $teacher->last_name }}" name="last_name" placeholder="Last Name" required">
            </div>

            <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="email" class="form-control" id="email" value="{{ $teacher->email }}" name="email" required>
            </div>

            <div class="col-md-6">
                <label for="inputPassword" class="form-label">Password <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="password" class="form-control" id="password" value="{{ $teacher->password }}" name="password" required>
            </div>

            <div class="col-md-6">
                <label for="formFile" class="form-label">Photo</label>
                <input class="form-control" type="file" id="photo" value="{{ $teacher->photo }}" onchange="previewFile()">
                <div id="previewPhoto"></div>
                <input type="hidden" id="photoHiddenInput" name="photo" value="">
            </div>
            
            <div class="col-md-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="adress" value="{{ $teacher->address }}" name="address" placeholder="Calle Geronimo Hernandez, Francisco Villa #34135">
            </div>
            
            
            <div class="col-md-4">
                <label for="inputPhone" class="form-label">Phone <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="phone" value="{{ $teacher->phone }}" name="phone" placeholder="618 170 .. ..." required>
            </div>
            
            <div class="col-md-4">
                <label for="inputBirthday" class="form-label">Birthday</label>
                <input type="date" class="form-control" id="birthday" value="{{ $teacher->birthday }}" name="birhday">
            </div>

            <div class="col-md-4">
                <label for="inputGender" class="form-label">Gender <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <select id="gender" value="{{ $teacher->gender }}" class="form-select" name="gender" required>
                    <option>Male</option>
                    <option>Female</option>
                </select>
            </div>
            
            <div class="row mt-4">
                <div class="col-12-md">
                    <button type="submit" class="btn btn-outline-primary"><i class="bi bi-person-plus"></i> Edit</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    window.launchSwal = () => {
        Swal.fire({
            title: 'Success!',
            text: 'The teacher has been edited successfully.',
            icon: 'success',
        });
    };
    
    // Launch alert if success store controller return success
    @if (session('success'))
    document.addEventListener('DOMContentLoaded', () => {
        window.launchSwal();
    });
    @endif
</script>
@endsection