<?php

namespace App\Http\Livewire\Familyplanning;

use App\Models\Familyplanning;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $age;
    public $address;
    public $weight;
    public $blood_pressure;
    public $description;

    protected $rules = [
        'name' => 'required',
        'age' => 'required',
        'address' => 'required',
        'weight' => 'required',
        'blood_pressure' => 'required',
        'description' => 'required'
    ];

    public function create()
    {
        $this->validate();

        Familyplanning::create([
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'weight' => $this->weight,
            'blood_pressure' => $this->blood_pressure,
            'description' => $this->description,
        ]);

        $this->redirectRoute('familyplanning.index');
    }


    public function render()
    {
        return view('livewire.familyplanning.create');
    }
}
