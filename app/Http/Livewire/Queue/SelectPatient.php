<?php

namespace App\Http\Livewire\Queue;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class SelectPatient extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;

    public function render()
    {
        $patients = Patient::query();
        $patients->where('name', 'like', '%'.$this->search.'%')
            ->orWhere('nik', 'like', '%'.$this->search.'%');
        $patients = $patients->paginate(5);
        return view('livewire.queue.select-patient', compact('patients'));
    }
}
