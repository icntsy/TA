<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Single extends Component
{
    public $user;

    public function mount(User $user){
        $this->user = $user;
    }

    public function delete(){
        $this->user->delete();
        $this->emit('userDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.user.single');
    }
}
