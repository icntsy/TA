<?php

namespace App\Http\Livewire\Drug;

use App\Models\Drug;
use Livewire\Component;

class Single extends Component
{
    public $drug;
    public $available;

    public function mount(Drug $drug){
        $this->drug = $drug;
        $this->available = $drug->min_stok < $drug->stok;
    }

    public function render()
    {
        return view('livewire.drug.single');
    }

    public function delete(){
        $this->drug->delete();
        $this->dispatchBrowserEvent('show-message', ['type' => 'error', 'message' => __('Obat Terhapus', ['name' => __('Article') ]) ]);
        $this->emit('articleDeleted');
    }
}
