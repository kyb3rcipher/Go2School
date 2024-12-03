@extends('layouts.platform')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="fa-solid fa-book-open-reader"></i> Add Book</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('library.list') }}" wire:navigate><i class="bi bi-person-video3 me-2 h6"></i> Books</a></li>
        <li class="breadcrumb-item active" aria-current="page">Add Book</li>
    </ol>
</nav>

<div class="mb-4">
    <form class="row g-3" action=" {{ route('library.store') }}" method="POST" nctype="multipart/form-data">
        @csrf

        <div class="row g-3">
            <div class="col-md-3">
                <label for="inputTitle" class="form-label">Title <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="inputTitle" name="title" placeholder="Title" required">
            </div>

            <div class="col-md-3">
                <label for="inputAuthor" class="form-label">Author <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="inputAuthor" name="author" placeholder="Author" required">
            </div>

            <div class="col-md-6">
                <label for="inputResume" class="form-label">Resume <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <input type="text" class="form-control" id="inputResume" name="resume" placeholder="Short text about book" required>
            </div>
            
                <label for="inputGender" class="form-label">Gender <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                <select id="inputGender" class="form-select" name="gender" required>
                    <option>Action</option>
                    <option>Drama</option>
                    <option>Romantic</option>
                    <option>Comedy</option>
                    <option>Soap Opera</option>
                </select>
            </div>
            
            <div class="row mt-4">
                <div class="col-12-md">
                    <button type="submit" class="btn btn-outline-primary"><i class="fa-regular fa-bookmark"></i> Add</button>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    window.launchSwal = () => {
        Swal.fire({
            title: 'Success!',
            text: 'The book has been added successfully.',
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