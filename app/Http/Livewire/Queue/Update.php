<?php

namespace App\Http\Livewire\Queue;

use App\Models\Queue;
use Livewire\Component;

class Update extends Component
{
    public $queue;
    public $patient;
    public $main_complaint;

    protected $rules = [
        'queue_number' => 'required',
        'doctor_id' => 'required',
        'service_id' => 'required',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Article')])]);

        $this->queue->update([
            'queue_number' => $this->queue_number,
            'doctor_id' => $this->doctor_id,
            'service_id' => $this->service_id,
        ]);
    }

    public function mount(Queue $queue)
    {
        $this->queue = $queue;
        $this->patient = $queue->patient;

        $this->queue_number = $queue->queue_number;
        $this->doctor_id = $queue->doctor_id;
        $this->service_id = $queue->service_id;
        $this->main_complaint = $queue->main_complaint;
    }

    public function render()
    {
        return view('livewire.queue.update');
    }
}
