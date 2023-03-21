<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Livewire\Component;

class Update extends Component
{
    public $patient;

    public $name;
    public $birth_date;
    public $gender;
    public $address;
    public $phone_number;
    public $study;
    public $bpjs_number;
    public $profession;
    public $allergy;

    protected $rules = [
        'name' => 'required',
        'birth_date' => 'required|date',
        'gender' => 'required',
        'address' => 'required',
        'phone_number' => 'required',
        'study' => 'required',
        'profession' => 'required',
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil memperbarui data', ['name' => __('Article') ]) ]);

        $this->patient->update([
            'name' => $this->name,
            'birth_date' => $this->birth_date,
            'gender' => $this->gender,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'study' => $this->study,
            'bpjs_number' => $this->bpjs_number,
            'profession' => $this->profession,
            'allergy' => $this->allergy,
        ]);
    }
    public function mount(Patient $patient)
    {
        $this->patient = $patient;
        $this->name = $patient->name;
        $this->birth_date = $patient->birth_date;
        $this->gender = $patient->gender;
        $this->address = $patient->address;
        $this->phone_number = $patient->phone_number;
        $this->study = $patient->study;
        $this->bpjs_number = $patient->bpjs_number;
        $this->profession = $patient->profession;
        $this->allergy = $patient->allergy;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.patient.update');
    }
}
