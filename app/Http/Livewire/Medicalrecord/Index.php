<?php

namespace App\Http\Livewire\MedicalRecord;

use App\Models\MedicalRecord;
use Illuminate\View\View;
use Livewire\Component;

class Index extends Component
{

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('livewire.medicalrecord.index');
    }
}
