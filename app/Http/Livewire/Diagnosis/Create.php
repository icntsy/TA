<?php

namespace App\Http\Livewire\Diagnosis;

use App\Models\Diagnosis;
use Livewire\Component;

class Create extends Component
{
    public $diagnosis;
    public $code;
    public $icc_code;

    protected $rules = [
        'code' => 'required',
        'icc_code' => 'required',
        'diagnosis' => 'required'
    ];

    public function create()
    {
        $this->validate();

        Diagnosis::create([
            'code' => $this->code,
            'icc_code' => $this->icc_code,
            'diagnosis' => $this->diagnosis,
        ]);

        $this->reset();
        $this->redirectRoute('diagnosis.index');
    }

    public function render()
    {
        return view('livewire.diagnosis.create');
    }
}
