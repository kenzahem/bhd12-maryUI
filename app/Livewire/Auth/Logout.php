<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Mary\Traits\Toast;

class Logout extends Component
{
    use Toast;

    public function logoutUser()
    {
        Auth::logout();
        $this->info('Logging Out');
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
