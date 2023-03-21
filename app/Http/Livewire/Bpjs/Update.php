<?php

namespace App\Http\Livewire\Bpjs;

use App\Models\Bpjs;
use Livewire\Component;
use Livewire\WithFileUploads;

class Update extends Component
{
    use WithFileUploads;

    public $bpjs;

    public $name;
    public $identity_card;
    public $family_card;
    public $bpjs_card;
    

    protected $rules = [
        'name' => 'required',
        'identity_card' => 'required',
        'family_card' => 'required',
        'bpjs_card' => 'required'
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();
        $filename = $this->identity_card->store('identity_card','public');
        $family = $this->family_card->store('family_card','public');
        $bpjs = $this->bpjs_card->store('bpjs_card','public');

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil memperbarui data', ['name' => __('Article') ]) ]);

        $this->bpjs->update([
            'name' => $this->name,
            'identity_card' => $filename,
            'family_card' => $family,
            'bpjs_card' => $bpjs,
            
        ]);
    }
    public function mount(Bpjs $bpjs)
    {
        $this->bpjs = $bpjs;
        $this->name = $bpjs->name;
        $this->identity_card= $bpjs->identity_card;
        $this->family_card= $bpjs->family_card;
        $this->bpjs_card= $bpjs->bpjs_card;
    
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */


    public function render()
    {
        return view('livewire.bpjs.update');
    }
}
