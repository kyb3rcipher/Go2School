<div>
    <form wire:submit="addCarrer">
        <div class="modal-body">
            @if(session()->has('success'))
            <div class="mb-3 alert alert-success">
                Carrer "{{ session('success') }}" added success.
            </div>
            @endif

            <div class="mb-3">
                <label for="inputCarrerName" class="form-label">Name:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="inputCarrerName" wire:model="name">
                
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Add carrer</button>
    </form>
        </div>
</div>
