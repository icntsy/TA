<?php

namespace App\Http\Livewire\Component;

use App\Models\Drug;
use Livewire\Component;
use Livewire\WithPagination;

class ModalDrug extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public $search;

    public function render()
    {
        $drugs = Drug::query()->where('nama', 'like', '%'. $this->search.'%');
        $drugs = $drugs->paginate(10);
        return view('livewire.component.modal-drug', compact('drugs'));
    }
}
