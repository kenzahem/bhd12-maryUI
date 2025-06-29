<?php

namespace App\Livewire\Auth;

use Mary\Traits\Toast;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{

    use Toast;

    #[Validate('required|email')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function authUser()
    {
        $this->validate();

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            $this->info('Redirecting...', position: 'toast-top toast-center');
            return redirect()->to('/profile');
        }
            $this->error('Wrong Credentials!', position: 'toast-top toast-center');
            return redirect()->back();
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
