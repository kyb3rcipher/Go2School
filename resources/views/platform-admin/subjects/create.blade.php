@extends('layouts.platform-admin')

@push('css')
<style type="text/css">
    .dragging {
        opacity: 0.5;
    }

    #target-container.drag-over {
        border: 2px dashed var(--primary);
        border-radius: 3px;
    }
</style>
@endpush
@push('js')<script src="/js/subjects.js"></script>@endpush

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-journal-plus h2"></i> Create new subject</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-admin.index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('subjects.index') }}" wire:navigate><i class="bi bi-journal-bookmark-fill me h6"></i> Subjects</a></li>
        <li class="breadcrumb-item active">New subject</li>
    </ol>
</nav>

<form action="{{ route('subjects.store') }}" method="POST">
    @csrf
    <input type="hidden" name="teacher_ids" id="teacher-ids">

    <div class="col-3 mb-3">
        <label for="inputPassword5" class="form-label">Name:</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="col-3 mb-3">
        <label for="inputPassword5" class="form-label">Prefeer grade:</label>
        <select class="form-select" name="prefeer_grade">
            <option selected disabled>Select grade</option>
            <option value="1">1°</option>
            <option value="2">2°</option>
            <option value="3">3°</option>
            <option value="4">4°</option>
            <option value="5">5°</option>
            <option value="6">6°</option>
        </select>
    </div>

    <div class="col-9 mb-3" style="padding: 10px;">
        <label for="inputPassword5" class="form-label">Assign teacher:</label>
        <div class="d-flex bg-white border border-3 rounded-3 shadow">
            <div class="border-end border-gray-300 p-4 pb-5 col-lg-5" id="source-container">
                <div class="position-relative w-100">
                    <input type="text" placeholder="Search teachers" class="form-control bg-white text-dark py-2 ps-5 pe-3 rounded-3 border shadow-sm">
                    <div class="position-absolute top-50 start-0 translate-middle-y ps-3">
                        <i class="bi bi-search" width="20" height="20"></i>
                    </div>
                </div>

                <ul class="list-unstyled mt-4">
                    @foreach ($teachers as $teacher)
                        <li class="d-flex align-items-center mb-3 text-dark draggable" draggable="true" id="item-1" name="{{ $teacher->id }}">
                            <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?auto=format&w=80&h=80&q=60&fit=facearea&facepad=3" 
                                class="rounded-circle me-3" alt="Nicholas North" width="40" height="40">
                            <span>{{ $teacher->name }} {{ $teacher->last_name }}</span>
                        </li>
                    @endforeach
                </ul>
            </div>
        
            <div class="p-4 pb-5 col-lg rounded" id="target-container" style="min-height: 200px; background-color: #f8f9fa;">
                <p class="text-muted">Drag items here</p>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <div class="col-12-md">
            <button type="submit" class="btn btn-outline-primary"><i class="bi bi-journal-plus"></i> Create</button>
        </div>
    </div>
</form>

<script>
    window.launchSwal = () => {
        Swal.fire({
            title: 'Success!',
            text: 'The subject has been created successfully.',
            icon: 'success',
        });
    };

    @if (session('success'))
    document.addEventListener('DOMContentLoaded', () => {
        window.launchSwal();
    });
    @endif
</script>
@endsection