<?php

namespace App\Http\Livewire\Component;

use App\Models\Diagnosis;
use Livewire\Component;

class DiagnosaSingle extends Component
{
    public $diagnosis;

    public function mount(Diagnosis $diagnosis){
        $this->diagnosis = $diagnosis;
    }

    public function select(){
//        $this->emitTo('queue.process','diagnosaAdded', $this->diagnosis->id );
        $this->emit('diagnosaAdded', $this->diagnosis->id);
    }
    public function render()
    {
        return view('livewire.component.diagnosa-single');
    }
}
