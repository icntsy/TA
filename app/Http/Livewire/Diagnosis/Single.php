<?php

namespace App\Http\Livewire\Diagnosis;

use App\Models\Diagnosis;
use Livewire\Component;

class Single extends Component
{
    public $diagnosis;

    public function mount(Diagnosis $diagnosis){
        $this->diagnosis = $diagnosis;
    }
    public function render()
    {
        return view('livewire.diagnosis.single');
    }

    public function delete(){
        $this->diagnosis->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('Diagnosis Terhapus', ['name' => __('Article') ]) ]);
        $this->emit('diagnosisDeleted');
    }
}
