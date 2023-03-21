<?php

namespace App\Http\Livewire\Diagnosis;

use App\Models\Diagnosis;
use Livewire\Component;

class Create extends Component
{
    public $category;
    public $subcategory;
    public $english_name;
    public $indonesian_name;

    protected $rules = [
        'category' => 'required',
        'subcategory' => "required",
        "english_name" => "required",
        "indonesian_name" => "required"
    ];

    public function create()
    {
        $this->validate();

        Diagnosis::create([
            'category' => $this->category,
            'subcategory' => $this->subcategory,
            'english_name' => $this->english_name,
            'indonesian_name' => $this->indonesian_name
        ]);

        $this->reset();
        $this->redirectRoute('diagnosis.index');
    }

    public function render()
    {
        return view('livewire.diagnosis.create');
    }
}
