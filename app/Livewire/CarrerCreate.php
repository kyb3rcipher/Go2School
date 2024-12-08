<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Carrer;

class CarrerCreate extends Component
{
    public $name;

    protected $rules = [
        'name' => 'required|unique:carrers|min:3|max:255'
    ];

    public function addCarrer()
    {
        $this->validate();

        Carrer::create([
            'name' => $this->name
        ]);

        // Dispatch an event to update the list
        $this->dispatch('carrer-added')->to(CarrerList::class);
        
        // Reset the input and show a success message
        session()->flash('success', $this->name);
        $this->reset('name');
    }

    public function render()
    {
        return view('livewire.carrer-create');
    }
}
