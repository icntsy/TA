<?php

namespace App\Http\Livewire\Response;

use Livewire\Component;
use App\Models\Response;

class Update extends Component
{
    public $response;

    public $success;
    public $failed;
    public $description;

    protected $rules = [
        'success' => 'required',
        'failed' => 'required',
        'description' => 'required',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil memperbarui data', ['name' => __('Article') ]) ]);

        $this->response->update([
            'success' => $this->success,
            'failed' => $this->failed,
            'description' => $this->description,
        ]);
    }
    public function mount(Response $response)
    {
        $this->response = $response;
        $this->success = $response->success;
        $this->failed = $response->failed;
        $this->description = $response->description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.response.update');
    }
}