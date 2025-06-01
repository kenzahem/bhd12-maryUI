<?php

namespace App\Livewire\Backend\Users;

use App\Models\User;
use Mary\Traits\Toast;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Ramsey\Collection\Collection;
use Illuminate\Support\Facades\DB;

class AddCredits extends Component
{

    use Toast;

    public function users()
    {
        return collect(User::all());
    }

    public function render()
    {
        return view('livewire.backend.users.add-credits');
    }
}
