<?php

namespace App\Http\Livewire\Room;

use App\Imports\DrugImport;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class Import extends Component
{
    use WithFileUploads;
    public $file;

    public function render()
    {
        return view('livewire.room.import');
    }
}
