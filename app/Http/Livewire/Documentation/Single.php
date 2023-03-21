<?php

namespace App\Http\Livewire\Documentation;

use App\Models\Documentation;
use Livewire\Component;


class Single extends Component
{
    public $documentation;

    public function mount(Documentation $documentation){
        $this->documentation = $documentation;
    }

    public function delete(){
        $this->documentation->delete();
        $this->emit('documentationDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.documentation.single');
    }
}
