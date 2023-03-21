<?php

namespace App\Http\Livewire\Lab;

use App\Models\Lab;
use Livewire\Component;

class Create extends Component
{
    public $nama;
    public $satuan;
    public $harga;

    protected $rules = [
        'nama' => 'required',
        'satuan' => 'required',
        'harga' => 'required'
    ];

    public function create()
    {
        $this->validate();
        Lab::create(
            [
                'nama' => $this->nama,
                'satuan' => $this->satuan,
                'harga' => $this->harga,
            ]
        );
        $this->redirectRoute('lab.index');
    }

    public function render()
    {
        return view('livewire.lab.create');
    }
}
