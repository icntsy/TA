<?php

namespace App\Http\Livewire\Component;

use App\Models\Drug;
use Livewire\Component;

class DrugSingle extends Component
{
    public $drug;

    public function select(){
        $this->emit('drugAdded', $this->drug->id);
    }

    public function mount(Drug $drug){
        $this->drug = $drug;
    }
    public function render()
    {
        return view('livewire.component.drug-single');
    }
}
