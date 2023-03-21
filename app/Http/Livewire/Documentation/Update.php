<?php

namespace App\Http\Livewire\Documentation;

use App\Models\Documentation;
use Livewire\Component;

class Update extends Component
{
    public $documentation;

    public $title;
    public $description;
    public $url;
    public $method;
    public $parameter_id;
    public $response_id;

    protected $rules = [
        'title' => 'required',
        'description' => 'required|date',
        'url' => 'required',
        'method' => 'required',
        'parameter_id' => 'required',
        'response_id' => 'required',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil memperbarui data', ['name' => __('Article') ]) ]);

        $this->documentation->update([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'parameter_id' => $this->parameter_id,
            'response_id' => $this->response_id,
        ]);
    }
    public function mount(Documentation $documentation)
    {
        $this->documentation = $documentation;
        $this->title = $documentation->title;
        $this->description = $documentation->description;
        $this->url = $documentation->url;
        $this->parameter_id = $documentation->parameter_id;
        $this->response_id = $documentation->response_id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.documentation.update');
    }
}
