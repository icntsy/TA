<?php

namespace App\Http\Livewire\Pregnantmom;

use App\Models\Pregnantmom;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $age;
    public $address;
    public $anak_ke;
    public $hpht;
    public $hpl;
    public $pregnant_age;
    public $lila;
    public $weight;
    public $blood_pressure;
    public $tfu;
    public $djj; 
    public $immunization_tt; 
    public $description; 
    public $complaint; 

    protected $rules = [
        'name' => 'required',
        'age' => 'required',
        'address' => 'required',
        'anak_ke' => 'required',
        'hpht' => 'required',
        'hpl' => 'required',
        'pregnant_age' => 'required',
        'lila' => 'required',
        'weight' => 'required',
        'blood_pressure' => 'required',
        'tfu' => 'required',
        'djj' => 'required',
        'immunization_tt' => 'required',
        'description' => 'required',
        'complaint' => 'required',
    ];

    public function create()
    {
        $this->validate();

        Pregnantmom::create([
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'anak_ke' => $this->anak_ke,
            'hpht' => $this->hpht,
            'hpl' => $this->hpl,
            'pregnant_age' => $this->pregnant_age,
            'lila' => $this->lila,
            'weight' => $this->weight,
            'blood_pressure' => $this->blood_pressure,
            'tfu' => $this->tfu,
            'djj' => $this->djj,
            'immunization_tt' => $this->immunization_tt,
            'description' => $this->description,
            'complaint' => $this->complaint,
        ]);

        $this->redirectRoute('pregnantmom.index');
    }

    public function render()
    {
        return view('livewire.pregnantmom.create');
    }
}
