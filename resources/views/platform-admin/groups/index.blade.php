@extends('layouts.platform-admin')

@push('css')
    <link rel="stylesheet" href="/css/groups.css">
@endpush
@push('js')
    <script>const teachers = @json($teachers);</script>
    <script src="/js/groups.js"></script>
@endpush

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-video2"></i> Groups</h1>
<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('platform-admin.index') }}" wire:navigate>Home</a></li>
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
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createGroupModal">New group</button>
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

<!-- Create Group Modal -->
<div class="modal fade" id="createGroupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="createGroupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="createGroupModalLabel">Create new group</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
        
            <div class="modal-body">
                <form>
                    <div class="row justify-content-center align-items-start">
                        <!-- Left column -->
                        <div class="col-md-5">
                            <div class="col-md-10 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Grade: <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                <select class="form-select">
                                    <option selected disabled>Select Grade</option>
                                    <option value="1">1 - 2</option>
                                    <option value="2">3 - 4</option>
                                    <option value="3">5 - 6</option>
                                </select>
                            </div>
                
                            <div class="col-md-10 mb-3">
                                <label for="" class="form-label">Group: <sup><i class="bi bi-asterisk text-primary"></i></sup></label>
                                <input type="text" class="form-control" maxlength="1" pattern="[A-Za-z]" style="text-transform:uppercase">
                            </div>
                
                            <div class="col-md-10 mb-3">
                                <label for="exampleInputEmail1" class="form-label">Carrer:</label>
                                <select class="form-select">
                                    <option selected disabled>Select Carrer</option>
                                    @foreach ($carrers as $carrer)
                                        <option value="{{ $carrer->name }}">{{ $carrer->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <!-- Right column -->
                        <div class="col-md-6">
                            <label for="exampleInputEmail1" class="form-label me-2">Subjects:</label>
                            <div class="d-flex mb-2">
                                <select class="form-select me-2">
                                    <option selected disabled>Add subjects templates</option>
                                    <option value="1">1°</option>
                                    <option value="2">2°</option>
                                    <option value="3">3°</option>
                                    <option value="4">4°</option>
                                    <option value="5">5°</option>
                                    <option value="6">6°</option>
                                </select>
                                <button class="btn btn-primary">Add</button>
                            </div>
            
                            <div class="d-flex gap-4 mb-2">
                                <select name="" id="source" size="5" class="form-select" multiple>
                                    @foreach ($subjects as $subject)
                                        <option value="{{ $subject->name }}">
                                            {{ $subject->name }}
                                        </option>
                                    @endforeach
                                </select>
            
                                <div class="d-flex flex-column justify-content-center gap-3">
                                    <button type="button" id="move-right" class="btn btn-circle btn-primary" onclick="addSubject(true)"><i class="bi bi-arrow-right-short"></i></button>
                                    <button type="button" id="move-left" class="btn btn-circle btn-primary" onclick="addSubject(false)"><i class="bi bi-arrow-left-short"></i></button>
                                </div>
            
                                <select name="" id="destination" size="5" class="form-select" multiple>
                                    
                                </select>
                            </div>
                            
                            <ul class="p-0" id="selectSubjectsTeachers" style="max-height: 100px; overflow-y: auto; overflow-x: hidden;">
                                <!-- Dinamic select(s) [teachers] for subjects -->
                            </ul>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Create</button>
            </div>
        </div>
    </div>
</div>
@endsection