<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn;
    public $data;
    public $header;

    public function mount($data, $header){
        $this->data = $data;
        $this->header = $header;
        $this->data->paginate(5);
    }

    public function render()
    {
        return view('livewire.component.table');
    }
}
