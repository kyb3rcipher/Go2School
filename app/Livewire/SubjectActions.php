<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subject;
use Livewire\Attributes\On;

class SubjectActions extends Component
{
    public $subjectID;

    public function confirmDeleteSubject() {
        $this->dispatch('show-delete-confirmation', id: $this->subjectID);
    }

    #[On('delete-subject')]
    public function deleteSubject($id = null) {
        $subjectId = $id ?? $this->subjectID;
        
        $subject = Subject::find($subjectId);
        
        if ($subject) {
            $subject->delete();
            // Emit dispatch event for notificate the subject eliminate and launch the alert & delete the row
            $this->dispatch('subject-deleted', id: $this->subjectID);
        }
    }

    public function render()
    {
        return view('livewire.subject-actions');
    }
}
