<div>
    <h6>Filter by:</h6>
    <div class="mb-4 mt-4">
        <div class="row">
            <div class="col">
                <select wire:model.live="selectedGrade" class="form-select" aria-label="Class" name="class_id" required>
                    <option value="">Select a grade</option>
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                    <option value="4">4°</option>
                    <option value="5">5°</option>
                    <option value="6">6°</option>
                </select>
            </div>
            <div class="col">
                <a href="{{ route('subjects.create') }}" class="btn btn-success">
                    <i class="bi bi-journal-plus h5"></i> Create subject
                </a>
            </div>
        </div>
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
</div>