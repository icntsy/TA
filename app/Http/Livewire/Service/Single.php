<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class Single extends Component
{

    public $service;

    public function delete(){
        $this->service->delete();
        $this->emit('serviceDeleted');

    }

    public function mount(Service $service){
        $this->service = $service;
    }
    public function render()
    {
        return view('livewire.service.single');
    }
}
