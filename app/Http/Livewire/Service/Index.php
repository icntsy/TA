<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $listeners = [
        'serviceDeleted'
    ];

    public function serviceDeleted(){
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Berhasil Menghapus Data'
        ]);
    }

    public function render()
    {
        $services = Service::query();
        $services = $services->paginate(10);
        return view('livewire.service.index', compact('services'));
    }
}
