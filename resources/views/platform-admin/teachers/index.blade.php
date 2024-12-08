@extends('layouts.platform-admin')

@section('title', 'Teachers')

@section('content')
<h1 class="h3 mb-3 text-gray-800"><i class="bi bi-person-video3 h2"></i> Teachers</h1>

<div class="row align-items-md-stretch mt-4">
    <div>

        <div class="d-flex justify-content-between">
            <fieldset class="border border-4 p-2 rounded-3 w-50 me-2">
                <legend class="float-none w-auto p-2"><a href="{{ route('classrooms.list') }}" wire:navigate>Classrooms: </a><button class="btn btn-primary btn-circle btn-sm"><i class="bi bi-plus-lg" style="color: white; -webkit-text-stroke: 1px;" data-bs-toggle="modal" data-bs-target="#addClassroomModal"></i></button></legend>

                @php
                    $classroomsCounter = 0;
                    $laboratoriesCounter = [];
                @endphp

                @foreach ($classrooms as $classroom)
                    @if ($classroom->laboratory !== null)
                        @php
                            if (!isset($laboratoriesCounter[$classroom->laboratory])) {
                                $laboratoriesCounter[$classroom->laboratory] = 0;
                            }
                            $laboratoriesCounter[$classroom->laboratory]++;
                        @endphp
                    @else
                        @php $classroomsCounter++; @endphp
                    @endif
                @endforeach

                @if ($classroomsCounter > 0)
                <p>Classrooms: {{ $classroomsCounter }}</p>
                @endif
                
                @foreach ($laboratoriesCounter as $laboratory => $count)
                    <p>Laboratories ({{ $laboratory }}): {{ $count }}</p>
                @endforeach
            </fieldset>

            <div class="card border-3 rounded-3 w-50 h-100" style="margin-top: 22px; width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Subjects:</h5>
                    <p class="card-text">School subjects to be assigned to teachers.</p>
                    <a href="{{ route('subjects.index') }}" class="btn btn-primary btn-icon-split" wire:navigate><span class="icon text-white-50"><i class="bi bi-journals h5"></i></span> <span class="text">Go to subjects</span></a>
                </div>
            </div>
        </div>

        <div class="col-9 p-3 bg-white border border-3 rounded-3 w-100" style="margin-top: 23px;">
            <div class="d-flex justify-content-between align-items-center">
                <h3><!--<a href="{{ route('students.list') }}" class="link-underline link-underline-opacity-0" wire:navigate>-->
                    <i class="bi bi-person-rolodex h3"></i> Teachers <a href="{{ route('teachers.list') }}" class="btn btn-primary btn-circle btn-sm"><i class="bi bi-plus-lg" style="color: white; -webkit-text-stroke: 1px;"></i></a>
                <!--</a>--></h3>
                
                <button class="btn mb-3 dropdown border border-0" type="button" data-bs-toggle="dropdown"><i class="bi bi-three-dots-vertical"></i></button>
                <ul class="dropdown-menu text-small shadow">
                    <li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#viewTeacherModal"><i class="bi bi-eye me-1"></i> View</button></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-pencil me-1"></i> Edit</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#"><i class="bi bi-trash me-1"></i> Delete</a></li>
                </ul>
            </div>
            
            @livewire('teacher-table')
        </div>
    </div>

    
</div>

<!-- Add new carrer modal -->
<div class="modal fade" id="addCarrerModal"  tabindex="-1" aria-labelledby="addCarrerModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addCarrerModal">Add new carrer</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            @livewire('carrer-create')
        </div>
    </div>
</div>

<!-- Add new classroom modal -->
<div class="modal fade" id="addClassroomModal" tabindex="-1" aria-labelledby="addClassroomModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addClassroomModal">Add classroom</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            @livewire('classroom-create')
        </div>
    </div>
</div>

<!-- View teacher modal -->
<div class="modal fade" id="viewTeacherModal" tabindex="-1" aria-labelledby="viewTeacherModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="viewTeacherModal">View teacher</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="pt-2">
                    <div class="mb-4">
                        <div class="col mb-3">
                            <div class="card bg-light">
                                <div class="card-header" style="display: flex; align-items: center; gap: 1rem;">
                                    <img style="width: 120px;" src="https://media.istockphoto.com/id/1386479313/photo/happy-millennial-afro-american-business-woman-posing-isolated-on-white.jpg?s=612x612&w=0&k=20&c=8ssXDNTp1XAPan8Bg6mJRwG7EXHshFO5o0v9SIj96nY=" class="rounded-3 card-img-top" alt="Profile photo">
                                    <div>
                                        <h5 class="card-title">Pou Salinas{{-- $student->name --}} {{-- $student->last_name --}}</h5>
                                        <p class="card-text">#ID: {{-- $student->id --}}</p>
                                    </div>

                                    <div style="margin-left: auto; align-self: flex-end;">
                                        <a type="button" class="btn p-0 me-0" href="#"><i class="bi bi-pencil-square"></i></a>
                                        <a type="button" class="btn" href="#"><i class="bi bi-trash"></i></a>
                                    </div>
                                </div>

                                

                                <ul class="card-body bg-white list-group list-group-flush">
                                    <li class="list-group-item">
                                        <h6>Teacher' Information</h6>
                                        <table class="table table-responsive mt-3">
                                            <tbody>
                                                <tr>
                                                    <th scope="row">Email:</th>
                                                    <td>{{-- $student->email --}}</td>
                                                    <th>Phone:</th>
                                                    <td>{{-- $student->birthday --}}</td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">Address:</th>
                                                    <td>{{-- $student->address --}}</td>
                                                    <th>Gender:</th>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card p-3 mb-3 border rounded bg-white">
                            <h6>Subjects'</h6>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection