<?php

namespace App\Http\Livewire\Queue;

use App\Models\Patient;
use Livewire\Component;

class PatientSingle extends Component
{
    public $patient;

    public function mount(Patient $patient){
        $this->patient = $patient;
    }

    public function select(){
        $this->emit('patientSelected', $this->patient->id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.queue.patient-single');
    }
}
