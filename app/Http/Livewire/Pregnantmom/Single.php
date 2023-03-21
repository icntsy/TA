<?php

namespace App\Http\Livewire\Pregnantmom;

use App\Models\Pregnantmom;
use Livewire\Component;

class Single extends Component
{
    public $pregnantmom;

    public function mount(Pregnantmom $pregnantmom){
        $this->pregnantmom = $pregnantmom;   
    }

    public function delete(){
        $this->pregnantmom->delete();
        $this->emit('pregnantmomDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.pregnantmom.single');
    }
}
