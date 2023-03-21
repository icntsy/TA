<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $search;
    protected $queryString = ['search'];

    protected $listeners = ['userDeleted'];
    public $sortType;
    public $sortColumn;

    public function userDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => "Data Berhasil Di Hapus"
        ]);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        $users = User::query();
        $users1 = User::query();
        $users->where('name', 'like', '%'.$this->search.'%');
        $users = $users->paginate(10);
        return view('livewire.user.index', compact('users', 'users1'));
    }
}
