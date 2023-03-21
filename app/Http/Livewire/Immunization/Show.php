<?php

namespace App\Http\Livewire\Immunization;

use App\Models\Immunization;
use Livewire\Component;

class Show extends Component
{
    public $immunization;

    public $name;
    public $age;
    public $address;
    public $birth_place;
    public $birth_date;
    public $weight;
    public $temperature;
    public $description;

    public function mount(Immunization $immunization)
    {
        $this->immunization = $immunization;
        $this->name = $immunization->name;
        $this->age = $immunization->age;
        $this->address = $immunization->address;
        $this->birth_place = $immunization->birth_place;
        $this->birth_date = $immunization->birth_date;
        $this->weight = $immunization->weight;
        $this->temperature = $immunization->temperature;
        $this->description = $immunization->description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.immunization.show');
    }
}
