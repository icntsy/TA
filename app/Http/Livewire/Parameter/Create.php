<?php

namespace App\Http\Livewire\Parameter;

use Livewire\Component;
use App\Models\Parameter;

class Create extends Component
{
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
    
    public function create()
    {
        $this->validate();

        Parameter::create([
            'name' => $this->name,
            'is_required' => $this->is_required,
            'type' => $this->type,
            'description' => $this->description,
        ]);

        $this->redirectRoute('parameter.index');
    }

    public function render()
    {
        return view('livewire.parameter.create');
    }
}
