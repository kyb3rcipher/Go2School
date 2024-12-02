@extends('layouts.platform')

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
    <form class="row g-3" action="{{ route('library.update', $id) }}" method="POST" >
        @csrf
        {{ method_field('PUT') }}

        <div class="row g-3">
            <div class="col-md-3">
                <label for="inputTitle" class="form-label">Title <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="title" value="{{ $book->title }}" name="title" placeholder="Title" required">
            </div>

            <div class="col-md-3">
                <label for="inputAuthor" class="form-label">Author <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="author" value="{{ $book->author }}" name="author" placeholder="Author" required">
            </div>

            <div class="col-md-4">
                <label for="inputGender" class="form-label">Gender <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <select id="gender" value="{{ $book->gender }}" class="form-select" name="gender" required>
                    <option>Action</option>
                    <option>Drama</option>
                    <option>Romantic</option>
                    <option>Comedy</option>
                    <option>Soap Opera</option>
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