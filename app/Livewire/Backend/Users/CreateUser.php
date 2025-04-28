<?php

namespace App\Livewire\Backend\Users;

use App\Models\User;
use Livewire\Attributes\Layout;
use Mary\Traits\Toast;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateUser extends Component
{

    use Toast;

    #[Validate('required')]
    public $name = '';

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required|confirmed')]
    public $password = '';

    public function createUser()
    {
        $validated = $this->validate();
        User::create($validated);
        $this->reset();
        $this->success('User Created!');

        return redirect()->back();
    }

    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.users.create-user');
    }
}
