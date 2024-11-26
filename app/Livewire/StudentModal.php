<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Student;
use Livewire\Attributes\On;

class StudentModal extends Component
{
    public $student;

    #[On('show-student')]
    public function showStudent($id) {
        $this->student = Student::find($id);
    }

    public function render()
    {
        return view('livewire.student-modal');
    }
}
