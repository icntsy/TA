<?php

namespace App\Http\Livewire\Response;

use Livewire\Component;

class Single extends Component
{
    public $response;

    public function mount(\App\Models\Response $response){
        $this->response = $response;   
    }

    public function delete(){
        $this->response->delete();
        $this->emit('responseDeleted');
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */

    public function render()
    {
        return view('livewire.response.single');
    }
}
