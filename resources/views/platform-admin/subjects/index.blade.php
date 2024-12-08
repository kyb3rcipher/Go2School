@extends('layouts.platform-admin')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-journal-bookmark-fill h2"></i> Subjects</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-admin.index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}" wire:navigate><i class="bi bi-person-lines-fill me-2"></i>Teachers</a></li>
        <li class="breadcrumb-item active">Subjects</li>
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
            <a href="{{ route('subjects.create') }}" class="btn btn-success"><i class="bi bi-journal-plus h5"></i> Create subject</a>
        </div>
    </form>
</div>
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Grade</th>
        <th scope="col">Teachers</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
            <tr data-subject-id="{{ $subject->id }}">
                <td>{{ $subject->name }}</td>
                <td>{{ $subject->prefeer_grade }}°</td>
                <td></td>
                <td>
                    @livewire('subject-actions', ['subjectID' => $subject->id], key($subject->id))
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
document.addEventListener('livewire:init', () => {
    Livewire.on('subject-deleted', ({ id }) => {
        // Remove the table row
        const row = document.querySelector(`[data-subject-id="${ id }"]`);
        if (row) {
            row.remove();
        }

        // Show success message
        Swal.fire({
            title: 'Success!',
            text: 'The subject has been deleted successfully.',
            icon: 'success',
        });
    });

    Livewire.on('show-delete-confirmation', ({ id }) => {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                Livewire.dispatch('delete-subject', { id });
            }
        });
    });
});
</script>
@endsection