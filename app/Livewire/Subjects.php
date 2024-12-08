<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Subject;

class Subjects extends Component
{
    public $selectedGrade = null;

    public function render()
    {
        $query = Subject::query();

        if ($this->selectedGrade) {
            $query->where('prefeer_grade', $this->selectedGrade);
        }

        $subjects = $query->get();

        return view('livewire.subjects', [
            'subjects' => $subjects
        ]);
    }

    public function updatedSelectedGrade() {
        $this->render();
    }
}
