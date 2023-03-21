<?php

namespace App\Http\Livewire\Diagnosis;

use App\Exports\DiagnosisExport;
use App\Models\Diagnosis;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];

    protected $listeners = ['diagnosisDeleted', 'diagnosisCreated', 'diagnosisImported'];
    public $sortType;
    public $sortColumn;

    public function diagnosisImported()
    {
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => 'Data Berhasil Di Import']);
    }

    public function importData()
    {
        $this->dispatchBrowserEvent('show-model', ['id' => 'modal']);
    }

    public function diagnosisDeleted()
    {
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
        $diagnoses = Diagnosis::query();
        $diagnoses->where('english_name', 'like', '%' . $this->search . '%')
            ->orWhere('indonesian_name', 'like', '%' . $this->search . '%');
        if ($this->sortColumn) {
            $diagnoses->orderBy($this->sortColumn, $this->sortType);
        } else {
            $diagnoses->latest('id');
        }
        $diagnoses = $diagnoses->paginate(5);
        return view('livewire.diagnosis.index', compact('diagnoses'));
    }

    public function exportData()
    {
        return Excel::download(new DiagnosisExport, 'data-diagnosis.xlsx');
    }
}
