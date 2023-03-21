<?php

namespace App\Http\Livewire\Familyplanning;

use App\Models\Familyplanning;
use Livewire\Component;

class Update extends Component
{
    public $familyplanning;

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

        $this->familyplanning->update([
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'weight' => $this->weight,
            'blood_pressure' => $this->blood_pressure,
            'description' => $this->description,
        ]);
    }
    public function mount(Familyplanning $familyplanning)
    {
        $this->familyplanning = $familyplanning;
        $this->name = $familyplanning->name;
        $this->age = $familyplanning->age;
        $this->address = $familyplanning->address;
        $this->weight = $familyplanning->weight;
        $this->blood_pressure = $familyplanning->blood_pressure;
        $this->description = $familyplanning->description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.familyplanning.update');
    }

}
