<?php

namespace App\Http\Livewire\Documentation;

use App\Models\Documentation;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $listeners = ['documentationDeleted'];
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn;
    public function documentationDeleted(){
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
        $documentations = Documentation::query();
        $documentations->where('title', 'like', '%'.$this->search.'%')
        ->orWhere('id', 'like', '%'.$this->search.'%');
        if($this->sortColumn){
            $documentations->orderBy($this->sortColumn, $this->sortType);
        }else{
            $documentations->latest('id');
        }
        $documentations = $documentations->paginate(5);
        return view('livewire.documentation.index', compact('documentations'));
    }
}
