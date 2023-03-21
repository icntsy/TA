<?php

namespace App\Http\Livewire\Diagnosis;

use App\Models\Diagnosis;
use Livewire\Component;

class Update extends Component
{
    public $code;
    public $type;
    public $description;
    public $diagnosis;

    public function rules()
    {
        return [
            'code' => 'required|unique:diagnoses,code,' . $this->diagnosis->id,
            'type' => 'required',
            'description' => 'required'
        ];
    }


    public function mount(Diagnosis $diagnosis)
    {
        $this->diagnosis = $diagnosis;
        $this->code = $diagnosis->code;
        $this->type = $diagnosis->icc_code;
        $this->description = $diagnosis->diagnosis;
    }

    public function update()
    {
        $this->validate();
        $this->diagnosis->update([
            'code' => $this->code,
            'diagnosis' => $this->description,
            'icc_code' => $this->type,
        ]);
        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Article')])]);
    }

    public function render()
    {
        return view('livewire.diagnosis.update');
    }
}
