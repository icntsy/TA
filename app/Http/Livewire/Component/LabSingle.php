<?php

namespace App\Http\Livewire\Component;

use App\Models\Lab;
use Livewire\Component;

class LabSingle extends Component
{
    public $lab;

    public function select(){
        $this->emit('labAdded', $this->lab->id);
    }

    public function mount(Lab $lab){
        $this->lab = $lab;
    }
    public function render()
    {
        return view('livewire.component.lab-single');
    }
}
