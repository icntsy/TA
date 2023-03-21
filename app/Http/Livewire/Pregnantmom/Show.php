<?php

namespace App\Http\Livewire\Pregnantmom;

use App\Models\Pregnantmom;
use Livewire\Component;

class Show extends Component
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

   
    public function mount(Pregnantmom $pregnantmom)
    {
        $this->$pregnantmom = $pregnantmom;
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
        return view('livewire.pregnantmom.show');
    }
}
