<?php

namespace App\Http\Livewire\Drug;

use App\Models\Drug;
use Livewire\Component;

class Create extends Component
{
    public $nama;
    // public $keterangan;
    public $stok;
    // public $harga;
    public $min_stok;
    public $harga;

    protected $rules = [
        'nama' => 'required',
        // 'keterangan' => 'required',
        'stok' => 'required',
        // 'harga' => 'required',
        'min_stok' => 'required|lte:stok',
        'harga' => 'required'
    ];

    public function create()
    {
        $this->validate();

        Drug::create([
            'nama' => $this->nama,
            // 'keterangan' => $this->keterangan,
            'stok' => $this->stok,
            'min_stok' => $this->min_stok,
            'harga' => $this->harga,
        ]);

        $this->reset();
        $this->redirectRoute('drug.index');
    }

    public function render()
    {
        return view('livewire.drug.create');
    }
}