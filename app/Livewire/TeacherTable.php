<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Teacher;

class TeacherTable extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.teacher-table', [ 'teachers' => Teacher::paginate(8) ]);
    }
}
