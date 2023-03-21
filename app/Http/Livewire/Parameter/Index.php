<?php

namespace App\Http\Livewire\Parameter;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Parameter;

class Index extends Component
{
    use WithPagination;
    protected $listeners = ['parameterDeleted'];
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn;
    public function parameterDeleted(){
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
        $parameters = Parameter::query();
        $parameters->where('name', 'like', '%'.$this->search.'%')
        ->orWhere('type', 'like', '%'.$this->search.'%');
        if($this->sortColumn){
            $parameters->orderBy($this->sortColumn, $this->sortType);
        }else{
            $parameters->latest('id');
        }
        $parameters = $parameters->paginate(5);
        return view('livewire.parameter.index', compact('parameters'));
    }
}
