<?php

namespace App\Http\Livewire\Room;

use App\Models\Room;
use Livewire\Component;

class Update extends Component
{
    public $room;
    public $name;
    public $price;

    protected $rules = [
        'name' => 'required',
        'price' => 'required|numeric',
    ];


    public function mount(Room  $room){
        $this->room = $room;
        $this->price = $room->price;
        $this->name = $room->name;
    }

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('Berhasil memperbarui data', ['name' => __('Article') ]) ]);

        $this->room->update([
            'name' => $this->name,
            'price' => $this->price,
        ]);
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.room.update');
    }
}
