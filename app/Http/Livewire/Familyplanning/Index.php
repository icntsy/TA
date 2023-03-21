<?php

namespace App\Http\Livewire\Familyplanning;

use App\Models\Familyplanning;
use Livewire\WithPagination;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;
    protected $listeners = ['familyplanningDeleted'];
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn; 
    public function familyplanningDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Data Keluarga Berencana Berhasil Di Hapus'
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
        $familyplannings = Familyplanning::query();
        $familyplannings->where('name', 'like', '%'.$this->search.'%')
        ->orWhere('age', 'like', '%'.$this->search.'%');
        if($this->sortColumn){
            $familyplannings->orderBy($this->sortColumn, $this->sortType);
        }else{
            $familyplannings->latest('id');
        }
        $familyplannings = $familyplannings->paginate(5);
        return view('livewire.familyplanning.index',['familyplannings' => $familyplannings]);
    }

}
