<?php

namespace App\Http\Livewire\Component;

use App\Models\Lab;
use Livewire\Component;
use Livewire\WithPagination;

class ModalLab extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public $search;

    public function render()
    {
        $labs = Lab::query()->where('nama', 'like', '%'. $this->search.'%');
        $labs = $labs->paginate(10);
        return view('livewire.component.modal-lab', compact('labs'));
    }
}
