@extends('layouts.platform-admin')

@section('title', 'List Teachers')

@section('content')
<div class="d-flex align-items-center mb-3 justify-content-between">
    <h1 class="h3 text-gray-800 mb-0"><i class="bi bi-person-rolodex me-2"></i> List Teachers</h1>
    <a href="{{ route('teachers.create') }}" type="button" class="btn btn-primary btn-circle" wire:navigate><i class="bi bi-plus-lg"></i></a>
</div>

<div class="mb-4 p-3 bg-white border shadow-sm">
    <table class="table table-responsive">
        <thead>
            <tr>
                <th scope="col">Photo</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
            <tr>
                <td>
                    @if (isset($teacher->photo))
                        <img src="#" class="rounded" alt="Profile picture" height="30" width="30">
                    @else
                        <i class="bi bi-person-square"></i>
                    @endif
                </td>
                <td>{{ $teacher->last_name }}</td>
                <td>{{ $teacher->name }}</td>
                <td>{{ $teacher->email }}</td>
                <td>{{ $teacher->phone }}</td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{ route('teachers.view', ['id' => $teacher->id]) }}" role="button" class="btn btn-sm btn-outline-primary" wire:navigate><i class="bi bi-eye"></i> View</a>
                        <a href="{{ route('teachers.edit', ['id' => $teacher->id]) }}" role="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-pen"></i> Edit</a>
                        <form action="{{ route('teachers.destroy', ['id' => $teacher->id]) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-primary"><i class="bi bi-trash2"></i> Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection