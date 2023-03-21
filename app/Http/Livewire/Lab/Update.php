<?php

namespace App\Http\Livewire\Lab;

use App\Models\Lab;
use Livewire\Component;

class Update extends Component
{
    public $lab;
    public $nama;
    public $satuan;
    public $harga;


    protected $rules = [
        'nama' => 'required',
        'satuan' => 'required',
        'harga' => 'required'
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil memperbarui data', ['name' => __('Article') ]) ]);

        $this->lab->update([
            'nama' => $this->nama,
            'satuan' => $this->satuan,
            'harga' => $this->harga,
        ]);
    }

    public function mount(Lab $lab){
        $this->lab = $lab;
        $this->nama = $lab->nama;
        $this->satuan = $lab->satuan;
        $this->harga = $lab->harga;
    }
    public function render()
    {
        return view('livewire.lab.update');
    }
}
