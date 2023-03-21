<?php

namespace App\Http\Livewire\Service;

use App\Models\Service;
use Livewire\Component;

class Update extends Component
{
    public $service;
    public $name;

    protected $rules = [
        'name' => 'required|string',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil Diperbarui', ['name' => __('Article')])]);

        $this->service->update([
            'name' => $this->name,

        ]);
    }

    public function mount(Service $service)
    {
        $this->service = $service;
        $this->name = $service->name;
    }

    public function render()
    {
        return view('livewire.service.update');
    }
}
