@extends('layouts.platform')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-journal-bookmark-fill h2"></i> Subjects</h1>

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
        <th scope="col">Acctions</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $subject)
            <tr>
                <td>{{ $subject->name }}</td>
                <td></td>
                <td></td>
                <td>
                    <div class="btn-group" role="group">
                        <a href="{{-- route('teachers.view', ['id' => $teacher->id]) --}}" role="button" class="btn btn-sm btn-outline-primary" wire:navigate><i class="bi bi-eye"></i> View</a>
                        <a href="#" role="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-pen"></i> Edit</a>
                        <button type="button" class="btn btn-sm btn-primary"><i class="bi bi-trash2"></i> Delete</button>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection