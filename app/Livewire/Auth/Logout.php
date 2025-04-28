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
        $this->info('Logging Out');
        Auth::logout();
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.auth.logout');
    }
}
