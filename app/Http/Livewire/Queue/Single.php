<?php

namespace App\Http\Livewire\Queue;

use App\Models\Queue;
use Livewire\Component;

class Single extends Component
{
    public $queue;

    public function mount(Queue $queue){
        $this->queue = $queue;
    }

    public function delete(){
        $this->queue->delete();
        $this->emit('queueDeleted');
    }
    public function render()
    {
        return view('livewire.queue.single');
    }

    public function processCheckup(){
        $this->redirectRoute('queue.process', ['queue' => $this->queue->id]);
    }

    public function processDrug(){
        $this->redirectRoute('queue.drug.process', ['queue' => $this->queue->id]);
    }
}
