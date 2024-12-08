<div>
    <form wire:submit="addClassroom">
        <div class="modal-body">
            @if(session()->has('success'))
            <div class="mb-3 alert alert-success">
                Classroom "{{ session('success') }}" added success.
            </div>
            @endif

            <div class="mb-3">
                <label for="inputClassroomName" class="form-label">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputClassroomName" wire:model="name" placeholder="E.g. #1 or LTI-2">
                
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="inputLaboratoryType" class="form-label">Laboratory:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputLaboratoryType" wire:model="laboratory_type" placeholder="E.g. Informatic">
                <div id="typeHelp" class="form-text">If the type of laboratory already exists, you must enter the same name.</div>
                
                @error('laboratory_type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add classroom</button>
    </form>
        </div>
</div>
