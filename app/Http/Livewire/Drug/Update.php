<?php

namespace App\Http\Livewire\Drug;

use App\Models\Drug;
use Livewire\Component;

class Update extends Component
{
    public $nama;
    public $dosis;
    public $stok;
    public $harga;
    public $min_stok;
    public $drug;

    protected $rules = [
        'nama' => 'required',
        'stok' => 'required',
        'harga' => 'required',
        'min_stok' => 'required|lte:stok'
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => 'Berhasil menyimpan data.' ]);

        $this->drug->update([
            'nama' => $this->nama,
            'dosis' => $this->dosis,
            'stok' => $this->stok,
            'min_stok' => $this->min_stok,
            'harga' => $this->harga,
        ]);
    }

    public function mount(Drug $drug){
        $this->drug = $drug;
        $this->nama = $drug->nama;
        $this->dosis = $drug->dosis;
        $this->stok = $drug->stok;
        $this->harga = $drug->harga;
        $this->min_stok = $drug->min_stok;

    }
    public function render()
    {
        return view('livewire.drug.update');
    }
}
