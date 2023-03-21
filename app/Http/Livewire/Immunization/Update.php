<?php

namespace App\Http\Livewire\Immunization;

use App\Models\Immunization;
use Livewire\Component;

class Update extends Component
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

    protected $rules = [
        'name' => 'required',
        'age' => 'required',
        'address' => 'required',
        'birth_place' => 'required',
        'birth_date' => 'required',
        'weight' => 'required',
        'temperature' => 'required',
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

        $this->immunization->update([
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'birth_place' => $this->birth_place,
            'birth_date' => $this->birth_date,
            'weight' => $this->weight,
            'temperature' => $this->temperature,
            'description' => $this->description,
        ]);
    }
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
        return view('livewire.immunization.update');
    }
}
