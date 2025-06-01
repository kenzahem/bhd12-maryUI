<?php

namespace App\Livewire\Backend\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Mary\Traits\Toast;

class Table extends Component
{

    use Toast;

    public function users()
    {
        return collect(User::all());
    }

    public function headers()
    {
        return [
            ['key' => 'name', 'label' => 'Username', 'class' => 'w-1/2']
        ];
    }

    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.users.table',[
            'users' => $this->users(),
            'headers' => $this->headers()
        ]);
    }
}
