@extends('layouts.platform')

@section('title', 'List Teachers')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-rolodex"></i> List Teacher</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('teachers.index') }}"><i class="bi bi-person-video3 me-2 h6"></i> Teachers</a></li>
        <li class="breadcrumb-item active">List Teacher</li>
    </ol>
</nav>

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
                        <a href="{{ route('teachers.view', ['id' => $teacher->id]) }}" role="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-eye"></i> View</a>
                        <a href="#" role="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-pen"></i> Edit</a>
                        <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-trash2"></i> Delete</button>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection