<?php

namespace App\Http\Livewire\Documentation;

use App\Models\Documentation;
use Livewire\Component;
use App\Models\Parameter;
use App\Models\Response;


class Create extends Component
{
    public $title;
    public $description;
    public $url;
    public $method;

    protected $rules = [
        'title' => 'required',
        'description' => 'required',
        'url' => 'required',
        'method' => 'required'
    ];




    public function create()
    {
        $this->validate();
        $document = Documentation::create([
            'title' => $this->title,
            'description' => $this->description,
            'url' => $this->url,
            'method' => $this->method
        ]);
        $this->redirectRoute('doc.add-param', ['doc' => $document->id]);
    }

    public function render()
    {
        return view('livewire.documentation.create');
    }
}
