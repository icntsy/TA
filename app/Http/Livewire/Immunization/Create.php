<?php

namespace App\Http\Livewire\Immunization;

use App\Models\Immunization;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $age;
    public $address;
    public $birth_place;
    public $birth_date;
    public $weight;
    public $temperature;
    public $description;

    protected $rules = [
        'name' => 'required',
        'age' => 'required',
        'address' => 'required',
        'birth_place' => 'required',
        'birth_date' => 'required|date',
        'weight' => 'required',
        'temperature' => 'required',
        'description' => 'required'
    ];

    public function create()
    {
        $this->validate();

        Immunization::create([
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'birth_place' => $this->birth_place,
            'birth_date' => $this->birth_date,
            'weight' => $this->weight,
            'temperature' => $this->temperature,
            'description' => $this->description,
        ]);

        $this->redirectRoute('immunization.index');
    }

    public function render()
    {
        return view('livewire.immunization.create');
    }
}
