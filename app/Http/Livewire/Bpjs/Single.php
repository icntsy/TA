<?php

namespace App\Http\Livewire\Bpjs;

use App\Models\Bpjs;
use Livewire\Component;

class Single extends Component
{
    public $bpjs;

    public function mount(Bpjs $bpjs){
        $this->bpjs = $bpjs;   
    }

    public function delete(){
        unlink(public_path('storage/' . $this->identity_card));
        unlink(public_path('storage/' . $this->family_card));
        unlink(public_path('storage/' . $this->bpjs_card));
        $this->bpjs->delete();
        $this->emit('bpjsDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.bpjs.single');
    }
}