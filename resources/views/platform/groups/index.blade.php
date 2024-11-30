@extends('layouts.platform')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-video2"></i> Groups</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-index') }}" wire:navigate>Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('students.index') }}" wire:navigate><i class="bi bi-people me-2 h6"></i> Students</a></li>
        <li class="breadcrumb-item active">Groups</li>
    </ol>
</nav>

<p class="mb-4">
    DataTables is a third party plugin that is used to generate the demo table below.
    For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.
</p>

<!-- DataTales Example -->
<div class="card shadow">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary">Groups Table</h6>
        <button class="btn btn-primary">New group</button>
    </div>    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Grade</th>
                        <th>Group</th>
                        <th>Carrer</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($groups as $group)
                    <tr>
                        <td>{{ $group->grade }}</td>
                        <td>{{ $group->group }}</td>
                        <td>---</td>
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
        </div>
    </div>
</div>
@endsection