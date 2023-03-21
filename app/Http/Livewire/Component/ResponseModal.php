<?php

namespace App\Http\Livewire\Component;

use Livewire\Component;
use App\Models\Response;
use App\Models\Documentation;

class ResponseModal extends Component
{
    public $success;
    public $failed;
    public $description;
    public $doc;


    public function mount(Documentation $doc)
    {
        $this->doc = $doc;
    }

    protected $rules = [
        'success' => 'required',
        'failed' => 'required',
        'description' => 'required'
    ];

    public function save()
    {
        $this->validate();
        $response = Response::create([
            'success' => $this->success,
            'failed' => $this->failed,
            'description' => $this->description,
            'documentation_id' => $this->doc->id,
        ]);
        $this->redirectRoute('doc.add-param', $this->doc->id);
    }
    public function render()
    {
        return view('livewire.component.response-modal');
    }

}
