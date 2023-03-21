<?php

namespace App\Http\Livewire\Component;

use App\Models\Documentation;
use Livewire\Component;
use App\Models\Parameter;

class ParameterModal extends Component
{
    public $name;
    public $is_required;
    public $type;
    public $description;
    public $doc;


    public function mount(Documentation $doc)
    {
        $this->doc = $doc;
    }


    protected $rules = [
        'name' => 'required',
        'is_required' => 'required',
        'type' => 'required',
        'description' => 'required',
        'doc' => 'required'
    ];

    public function save(){
        $this->validate();
        $parameter = Parameter::create([
            'name' => $this->name,
            'is_required' => $this->is_required,
            'type' => $this->type,
            'description' => $this->description,
            'documentation_id' => $this->doc->id,
        ]);
        $this->reset();
        $this->emit('paramAdded', $parameter->id);
    }

    public function render()
    {
        return view('livewire.component.parameter-modal');
    }
}
