<?php

namespace App\Http\Livewire\Parameter;

use Livewire\Component;
use App\Models\Parameter;

class Update extends Component
{
    public $parameter;

    public $name;
    public $is_required;
    public $type;
    public $description;

    protected $rules = [
        'name' => 'required',
        'is_required' => 'required',
        'type' => 'required',
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

        $this->parameter->update([
            'name' => $this->name,
            'is_required' => $this->is_required,
            'type' => $this->type,
            'description' => $this->description,
        ]);
    }
    public function mount(Parameter $parameter)
    {
        $this->parameter = $parameter;
        $this->name = $parameter->name;
        $this->is_required = $parameter->is_required;
        $this->type = $parameter->type;
        $this->description = $parameter->description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.parameter.update');
    }
}
