<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Update extends Component
{
    public $name;
    public $email;
    public $password;
    public $password_confirmation;
    public $role;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed',
        'role' => 'required'
    ];

    public function updated($input)
    {
        $this->validateOnly($input);
    }

    public function update()
    {
        $this->validate();

        $this->dispatchBrowserEvent('show-message', ['type' => 'success', 'message' => __('UpdatedMessage', ['name' => __('Article')])]);

        $this->user->update([
            'name' => $this->name,
            'email' => $this->email,
            'password' => \Hash::make($this->password),
            'role' => $this->role
        ]);
    }

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->password = $user->password;
        $this->role = $user->role;
    }
    public function render()
    {
        return view('livewire.user.update');
    }
}
