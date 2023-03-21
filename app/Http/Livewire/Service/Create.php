<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class Create extends Component
{
    public $name;

    public function rules(){
        return [
            'name' => 'required|unique:services,name'
        ];
    }

    public function create(){
        $this->validate();
        Service::create([
            'name' => $this->name
        ]);
        $this->dispatchBrowserEvent('show-message', [
            'type' => 'success',
            'message' => 'Berhasil Menambah Data'
        ]);

        $this->redirectRoute('service.index');
    }

    public function render()
    {
        return view('livewire.service.create');
    }
}
