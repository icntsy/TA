<?php

namespace App\Http\Livewire\Bpjs;

use App\Models\Bpjs;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $listeners = ['bpjsDeleted'];
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn;
    public function bpjsDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Data Photos Berhasil Di Hapus'
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
        $bpjss = Bpjs::query();
        $bpjss->where('name', 'like', '%'.$this->search.'%')
        ->orWhere('id', 'like', '%'.$this->search.'%');
        if($this->sortColumn){
            $bpjss->orderBy($this->sortColumn, $this->sortType);
        }else{
            $bpjss->latest('id');
        }
        $bpjss = $bpjss->paginate(5);
        return view('livewire.bpjs.index', compact('bpjss'));
        return view('livewire.bpjs.index', compact('bpjs'));
    }
}
