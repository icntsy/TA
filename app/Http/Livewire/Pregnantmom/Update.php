<?php

namespace App\Http\Livewire\Pregnantmom;

use App\Models\Pregnantmom;
use Livewire\Component;

class Update extends Component
{
    public $pregnantmom;

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
        
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil memperbarui data', ['name' => __('Article') ]) ]);

        $this->pregnantmom->update([
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
    }
    public function mount(Pregnantmom $pregnantmom)
    {
        $this->pregnantmom = $pregnantmom;
        $this->name = $pregnantmom->name;
        $this->age = $pregnantmom->age;
        $this->address = $pregnantmom->address;
        $this->anak_ke = $pregnantmom->anak_ke;
        $this->hpht = $pregnantmom->hpht;
        $this->hpl = $pregnantmom->hpl;
        $this->pregnant_age = $pregnantmom->pregnant_age;
        $this->lila = $pregnantmom->lila;
        $this->weight = $pregnantmom->weight;
        $this->blood_pressure = $pregnantmom->blood_pressure;
        $this->tfu = $pregnantmom->tfu;
        $this->djj = $pregnantmom->djj;
        $this->immunization_tt = $pregnantmom->immunization_tt;
        $this->description = $pregnantmom->description;
        $this->complaint = $pregnantmom->complaint;
      
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.pregnantmom.update');
    }
}
