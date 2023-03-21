<?php

namespace App\Http\Livewire\MedicalRecord;

use App\Models\Queue;
use Livewire\Component;

class Create extends Component
{

    public $queue;

    public function mount(Queue $queue){
        $this->queue = $queue;
    }

    public function showModal(){
        $this->dispatchBrowserEvent('showModal', ['id' => 'exampleModal']);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.medicalrecord.create');
    }
}
