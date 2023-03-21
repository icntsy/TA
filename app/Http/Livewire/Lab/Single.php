<?php

namespace App\Http\Livewire\Lab;

use App\Models\Lab;
use Livewire\Component;

class Single extends Component
{
    /**
     * @var Lab $lab
     */
    public $lab;

    public function mount(Lab $lab)
    {
        $this->lab = $lab;
    }
    public function render()
    {
        $lab = $this->lab;
        return view('livewire.lab.single', compact('lab'));
    }

    public function delete(){
        $this->lab->delete();
        $this->emit('labDeleted');
    }
}
