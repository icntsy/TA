<?php

namespace App\Http\Livewire\Response;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Response;

class Index extends Component
{
    use WithPagination;
    protected $listeners = ['responseDeleted'];
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn;
    public function responseDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Data Berhasil Di Hapus'
        ]);
    }
    /**
     * @var mixed
     */
    public $search;

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $responses = Response::query();
        $responses->where('description', 'like', '%'.$this->search.'%');
        if($this->sortColumn){
            $responses->orderBy($this->sortColumn, $this->sortType);
        }else{
            $responses->latest('id');
        }
        $responses = $responses->paginate(5);
        return view('livewire.response.index', compact('responses'));
    }
}
