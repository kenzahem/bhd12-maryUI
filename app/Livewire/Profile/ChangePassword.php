<?php

namespace App\Livewire\Profile;

use Mary\Traits\Toast;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Component
{

    use Toast;

    public $currentPassword;

    public $newPassword;

    public function updatePassword($currentPassword, $newPassword)
    {
        $user = Auth::user();

        if (!password_verify($currentPassword, $user->password)) {
            $this->toast('Current password is incorrect.', 'error');
            return;
        }

        $user->password = bcrypt($newPassword);
        $user->save();

        $this->toast('Password updated successfully!', 'success');
    }

    public function render()
    {
        return view('livewire.profile.change-password');
    }
}
