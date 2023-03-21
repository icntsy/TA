<?php

namespace App\Http\Livewire\Pregnantmom;

use App\Models\Pregnantmom;
use Livewire\Component;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    protected $listeners = ['pregnantmomDeleted'];
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn;
    public function pregnantmomDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Data Ibu Hamil Berhasil Di Hapus'
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
        $pregnantmoms = Pregnantmom::query();
        $pregnantmoms->where('name', 'like', '%'.$this->search.'%')
        ->orWhere('age', 'like', '%'.$this->search.'%');
        if($this->sortColumn){
            $pregnantmoms->orderBy($this->sortColumn, $this->sortType);
        }else{
            $pregnantmoms->latest('id');
        }
        $pregnantmoms = $pregnantmoms->paginate(5);
        return view('livewire.pregnantmom.index', compact('pregnantmoms'));
    }
}
