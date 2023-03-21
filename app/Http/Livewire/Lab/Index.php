<?php

namespace App\Http\Livewire\Lab;

use App\Models\Lab;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public $search;
    public $sortType;
    public $sortColumn;

    protected $listeners  = [
        'labDeleted'
    ];

    public function labDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Data Berhasil di Hapus'
        ]);
    }
    public function sort($column)
    {
        $sort = $this->sortType == 'desc' ? 'asc' : 'desc';
        $this->sortColumn = $column;
        $this->sortType = $sort;
    }

    public function render()
    {
        $labs = Lab::query()->where('nama', 'like', '%'. $this->search.'%');
        if($this->sortColumn){
            $labs->orderBy($this->sortColumn, $this->sortType);
        }else{
            $labs->latest('id');
        }
        $labs = $labs->paginate(10);
        return view('livewire.lab.index', compact('labs'));
    }
}
