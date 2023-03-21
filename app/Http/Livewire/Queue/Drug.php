<?php

namespace App\Http\Livewire\Queue;

use App\Models\Queue;
use Carbon\Carbon;
use Livewire\Component;

class Drug extends Component
{
    protected $listeners = [
        'queueDeleted','queueUpdated'
    ];

    public function queueDeleted(){
        $this->dispatchBrowserEvent('show-message',[
            'type' => 'success',
            'message' => 'Data Berhasil dihapus'
        ]);
    }
    public function render()
    {
        $queues = Queue::query();
        $queues->whereDate('created_at', Carbon::today())->where('has_check', true)->where('has_drug', false);
        $queues = $queues->paginate(10);
        return view('livewire.queue.drug', compact('queues'));
    }
}
