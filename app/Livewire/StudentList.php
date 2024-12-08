<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Student;

class StudentList extends Component
{
    use WithPagination;
    public function render()
    {
        return view('livewire.student-list', [ 'students' => Student::paginate(15) ]);
    }
}
