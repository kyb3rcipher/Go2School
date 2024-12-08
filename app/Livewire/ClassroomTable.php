<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Classroom;

class ClassroomTable extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.classroom-table', [ 'classrooms' => Classroom::paginate(10) ]);
    }

    public function delete($id) {
        Classroom::findOrFail($id)->delete();
    }
}