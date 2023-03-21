<?php

namespace App\Http\Livewire\Immunization;

use App\Models\Immunization;
use Livewire\Component;

class Single extends Component
{
    public $immunization;

    public function mount(Immunization $immunization){
        $this->immunization = $immunization;   
    }

    public function delete(){
        $this->immunization->delete();
        $this->emit('immunizationDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.immunization.single');
    }
}
