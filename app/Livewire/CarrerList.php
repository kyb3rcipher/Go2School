<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Carrer;
use Livewire\Attributes\On;

class CarrerList extends Component
{
    public $carrers;

    // Fetch carrers when the component is initialized
    public function mount() {
        $this->carrers = Carrer::all();
    }
    
    #[On('carrer-added')]
    public function updateCarrers() {
        // Refresh the carrers list
        $this->carrers = Carrer::all();
    }

    public function deleteCarrer($carrerId) {
        Carrer::find($carrerId)->delete();
        $this->carrers = Carrer::all();
    }

    public function render()
    {
        return view('livewire.carrer-list');
    }
}
