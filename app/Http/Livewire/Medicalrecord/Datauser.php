<?php

namespace App\Http\Livewire\MedicalRecord;

use App\Models\Patient;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Datauser extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];
    /**
     * @var mixed
     */
    public $search;


    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        $patients = Patient::query();
        $patients->where('name', 'like', '%'.$this->search.'%');
        $patients = $patients->paginate(10);
        return view('livewire.medicalrecord.datauser', compact('patients'));
    }
}
