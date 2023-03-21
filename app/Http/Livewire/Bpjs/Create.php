<?php

namespace App\Http\Livewire\Bpjs;

use Livewire\Component;
use App\Models\Bpjs;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $identity_card;
    public $family_card;
    public $bpjs_card;

    protected $rules = [
        'name' => 'required',
        'identity_card' => 'required|max:3072',
        'family_card' => 'required|max:3072',
        'bpjs_card' => 'required|max:3072'

    ];

    public function create(){
        $this->validate();
        $filename = $this->identity_card->store('identity_card','public');
        $family = $this->family_card->store('family_card','public');
        $bpjs = $this->bpjs_card->store('bpjs_card','public');

        Bpjs::create([
            'name' => $this->name,
            'identity_card' => $filename,
            'family_card' => $family,
            'bpjs_card' => $bpjs,
        ]);

        $this->redirectRoute('bpjs.index');
    }

    public function render()
    {
        return view('livewire.bpjs.create');
    }
}
