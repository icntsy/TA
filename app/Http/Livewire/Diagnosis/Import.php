<?php

namespace App\Http\Livewire\Diagnosis;

use App\Imports\DiagnosisImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Import extends Component
{
    use WithFileUploads;
    public $file;

    public function render()
    {
        return view('livewire.diagnosis.import');
    }
}
