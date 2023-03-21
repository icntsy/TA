<?php

namespace App\Http\Livewire\Component;

use App\Models\Diagnosis;
use Livewire\Component;
use Livewire\WithPagination;

class ModalDiagnosa extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];

    public $sortType;
    public $sortColumn;
    public $id_queue;

    public function render()
    {
        $diagnoses = Diagnosis::query();
        $diagnoses->where('english_name', 'like', '%' . $this->search . '%')
            ->orWhere('indonesian_name', 'like', '%' . $this->search . '%');
        if ($this->sortColumn) {
            $diagnoses->orderBy($this->sortColumn, $this->sortType);
        } else {
            $diagnoses->latest('id');
        }
        $diagnoses = $diagnoses->paginate(5);
        return view('livewire.component.modal-diagnosa', compact('diagnoses'));
    }
}
