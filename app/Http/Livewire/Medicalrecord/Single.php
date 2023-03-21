<?php

namespace App\Http\Livewire\MedicalRecord;

use App\Models\MedicalRecord;
use Livewire\Component;

class Single extends Component
{
    public $record;

    public function mount(MedicalRecord $record){
        $this->record = $record;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.medicalrecord.single');
    }
}
