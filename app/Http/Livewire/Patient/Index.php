<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $listeners = ['patientDeleted'];
    protected $paginationTheme = 'bootstrap';
    public $sortType;
    public $sortColumn;
    public function patientDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Data Pasien Berhasil Di Hapus'
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
        $patients = Patient::query();
        $patients->where('name', 'like', '%'.$this->search.'%')
        ->orWhere('nik', 'like', '%'.$this->search.'%');
        if($this->sortColumn){
            $patients->orderBy($this->sortColumn, $this->sortType);
        }else{
            $patients->latest('id');
        }
        $patients = $patients->paginate(5);
        return view('livewire.patient.index', compact('patients'));
    }
}
