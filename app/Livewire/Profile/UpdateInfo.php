<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Mary\Traits\Toast;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UpdateInfo extends Component
{

    public $name;

    public $email;

    public $verified;

    use Toast;

    public function updateProfile()
    {
        $user = Auth::user();
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();

        $this->toast('Profile updated successfully!', 'success');
    }

    public function render()
    {
        return view('livewire.profile.update-info');
    }
}
