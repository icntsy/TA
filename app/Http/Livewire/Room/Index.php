<?php

namespace App\Http\Livewire\Room;

use App\Exports\RoomExport;
use App\Models\Room;
use Livewire\Component;
use Livewire\WithPagination;
use Maatwebsite\Excel\Facades\Excel;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $queryString = ['search'];

    public $search;
    public $sortType;
    public $sortColumn;

    public function importData()
    {
        $this->dispatchBrowserEvent('show-model', ['id' => 'modal']);
    }

    public function downloadData()
    {
        return Excel::download(new RoomExport, 'Data-Ruangan.xlsx');
    }

    public function sort($column)
    {
        $sort = $this->sortType == 'desc' ? 'asc' : 'desc';
        $this->sortColumn = $column;
        $this->sortType = $sort;
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $rooms = Room::query();
        $rooms->where('name', 'like', '%' . $this->search . '%');
        $rooms = $rooms->paginate(10);
        return view('livewire.room.index', compact('rooms'));
    }
}
