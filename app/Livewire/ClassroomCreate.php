<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Classroom;

class ClassroomCreate extends Component
{
    public $name, $laboratory_type;

    public function addClassroom() {
        Classroom::create([
            'name' => $this->name,
            'laboratory' => $this->laboratory_type
        ]);
        
        session()->flash('success', $this->name);
        $this->reset('name');
        $this->reset('laboratory_type');
    }

    public function render()
    {
        return view('livewire.classroom-create');
    }
}
