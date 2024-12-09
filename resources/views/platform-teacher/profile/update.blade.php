@extends('layouts.platform-user')

@section('content')
<div class="card border-3 mt-3">
    <div class="card-body">
        <h4 class="card-title fw-bold fs-3">Update profile</h4>
        <h5 class="text-info">View and edit your data</h5>
        
        <hr>
        <form action="{{ route('platform-teacher.profile.update') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <div class="fw-bold fs-5">General information</div>
            </div>
            
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="email" value="{{ $teacher->email }}" maxlength="100" required>
                            <label>Email</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3 required">
                            <input type="text" class="form-control" name="phone" value="{{ $teacher->phone }}" maxlength="10" required>
                            <label>Phone</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="form-floating">
                        <div class="col-md">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="current_password" required>
                                <label>Current password:</label>
                                @error('current_password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="new_password">
                            <label>New password:</label>
                            @error('new_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" name="new_password_confirmation">
                            <label>Confirm new password:</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <select class="form-select input" name="gender" required>
                                <option value="Man" {{ (old('gender', $teacher->gender) == 'Man') ? 'selected' : '' }}>Man</option>
                                <option value="Woman" {{ (old('gender', $teacher->gender) == 'Woman') ? 'selected' : '' }}>Woman</option>
                            </select>
                            <label>Gender</label>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-floating mb-3">
                            <input type="date" class="form-control" name="birthday" value="{{ $teacher->birthday ?? '' }}">
                            <label>Birthday:</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="d-flex justify-content-between">
            <div></div><div>
                <button class="btn btn-primary btn-lg"><i class="bi bi-floppy-fill h5"></i> Save data</button>
        </form>
            </div>
        </div>
    </div>
</div>
@endsection