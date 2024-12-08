@extends('layouts.platform-admin')

@section('title', 'Register student')

@section ('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-plus-fill"></i> Register Student</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-admin.index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}" wire:navigate><i class="bi bi-people me-2 h6"></i> Students</a></li>
        <li class="breadcrumb-item active">Register Student</li>
    </ol>
</nav>

<div class="mb-4">
<form class="row g-3" action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="row g-3">
        <div class="col-md-3">
            <label for="inputName" class="form-label">Name: <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
            <input type="text" class="form-control" id="inputName" name="name" required>
        </div>

        <div class="col-md-3">
            <div id="inputLastName" class="form-text" style="margin-bottom: 6px;">Last name:</div>
            <input type="text" class="form-control" id="inputLastName" name="last_name">
        </div>
    
        <div class="col-md-3">
            <label for="inputEmail" class="form-label">Email: <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
            <input type="email" class="form-control" id="inputEmail" name="email" required>
        </div>

        <div class="col-md-3">
            <label for="inputPassword" class="form-label">Password: <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
            <input type="password" class="form-control" id="inputPassword" name="password" required>
        </div>

        <div class="col-md-3">
            <label for="inputPhoto" class="form-label">Photo</label>
            <input class="form-control" type="file" id="inputPhoto" name="photo">
        </div>

        <div class="col-md-3">
            <label for="inputPhone" class="form-label">Phone </label>
            <input type="text" class="form-control" id="inputPhone" name="phone" placeholder="618 170 .. ...">
        </div>

        <div class="col-md-6">
            <label for="inputAddress" class="form-label">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Calle Geronimo Hernandez, Francisco Villa #34135">
        </div>
        
        <div class="col-md-3">
            <label for="inputState" class="form-label">Gender <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
            <select id="inputState" class="form-select" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>
        </div>

        <div class="col-md-2">
            <label for="inputBirthday" class="form-label">Birthday <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
            <input type="date" class="form-control" id="inputBirthday" name="birthday" required>
        </div>

        <div class="col-md-2">
            <label for="inputBloodType" class="form-label">Blood Type <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
            <select id="inputBloodType" class="form-select" name="blood_type" required>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>                      
            </select>
        </div>
        
        <div class="col-5-md">
            <label for="inputIdNumber" class="form-label">ID Number <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
            <input type="text" class="form-control" id="inputIdNumber" name="id_number" placeholder="e.g. 4256-34-96-57-38" required>
        </div>
    </div>
    
    <div class="row mt-4 g-3">
        <h6>Academic Information</h6>
        
        <div class="col-md-3">
            <label for="selectCarrer" class="form-label">Assign to Carrer:</label>
            <select class="form-select" id="selectCarrer">
                @foreach ($groups as $group)
                    <option value="{{ $group->carreer }}">{{ $group->carreer }}</option>
                @endforeach
            </select>
        </div>
        
        <div class="col-md-2">
            <label for="selectGrade" class="form-label">Grade:</label>
            <select class="form-select" id="selectGrade" name="grade">
                @foreach ($groups as $group)
                    <option value="{{ $group->grade }}">{{ $group->grade }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-md-1">
            <label for="selectGroup" class="form-label">Group:</label>
            <select class="form-select" id="selectGroup">
                @foreach ($groups as $group)
                    <option value="{{ $group->group }}">{{ $group->group }}</option>
                @endforeach
            </select>
        </div>
    </div>
    
    <div class="row mt-4">
        <div class="col-12-md">
            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-person-plus"></i> Register</button>
        </div>
    </div>
</form>
</div>

<script>
    window.launchSwal = () => {
        Swal.fire({
            title: 'Success!',
            text: 'The student has been added successfully.',
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