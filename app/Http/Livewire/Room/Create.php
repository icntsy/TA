<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $price;

    protected $rules = [
        'name' => 'required',
        'price' => 'required|numeric',
    ];
    public function create(){
        $this->validate();
        Room::create([
            'name' => $this->name,
            'price' => $this->price,
        ]);

        $this->redirectRoute('room.index');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.room.create');
    }
}
