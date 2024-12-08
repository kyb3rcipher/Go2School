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

@livewire('subjects')

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