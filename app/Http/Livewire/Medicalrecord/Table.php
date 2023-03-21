<?php

namespace App\Http\Livewire\MedicalRecord;

use App\Models\MedicalRecord;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];

    protected $listeners = ['articleDeleted', 'drugCreated'];
    public $sortType;
    public $sortColumn;
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $records = MedicalRecord::query();
        $records = $records->paginate(10);
        return view('livewire.medicalrecord.table', compact('records'));
    }
}
