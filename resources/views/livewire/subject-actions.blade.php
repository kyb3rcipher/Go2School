<div class="btn-group" role="group">
    <a href="{{-- route('teachers.view', ['id' => $teacher->id]) --}}" role="button" class="btn btn-sm btn-outline-primary" wire:navigate><i class="bi bi-eye"></i> View</a>
    <a href="#" role="button" class="btn btn-sm btn-outline-primary"><i class="bi bi-pen"></i> Edit</a>
    <button type="button" class="btn btn-sm btn-primary" wire:click="confirmDeleteSubject"><i class="bi bi-trash2"></i> Delete</button>
</div>