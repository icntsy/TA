<?php

namespace App\Http\Livewire\Component;

use App\Models\Diagnosis;
use Livewire\Component;

class SingleDaignosa extends Component
{
    public $diagnosa;

    public function mount(Diagnosis $diagnosis){
        $this->diagnosa = $diagnosis;
    }
    public function render()
    {
        return view('livewire.component.single-daignosa');
    }
}
