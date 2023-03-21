<?php

namespace App\Http\Livewire\Response;

use GrahamCampbell\ResultType\Success;
use Livewire\Component;
use App\Models\Response;

class Create extends Component
{
    public $success;
    public $failed;
    public $description;

    protected $rules = [
        'success' => 'required',
        'failed' => 'required',
        'description' => 'required'
    ];

    public function create()
    {
        $this->validate();

        Response::create([
            'success' => $this-> success,
            'failed' => $this-> failed,
            'description' => $this-> description,
        ]);

        $this->redirectRoute('response.index');
    }
    public function render()
    {
        return view('livewire.response.create');
    }
}
