<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Logout extends Component
{

    public function logout(){
        \Auth::logout();
        $this->redirectRoute('login');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('livewire.auth.logout');
    }
}
