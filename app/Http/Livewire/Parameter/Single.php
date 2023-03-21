<?php

namespace App\Http\Livewire\Parameter;

use Livewire\Component;
use App\Models\Parameter;

class Single extends Component
{
    public $parameter;

    public function mount(Parameter $parameter){
        $this->parameter = $parameter;
    }

    public function delete(){
        $this->parameter->delete();
        $this->emit('parameterDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.parameter.single');
    }
}
