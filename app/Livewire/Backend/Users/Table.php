<?php

namespace App\Livewire\Backend\Users;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Table extends Component
{
    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.users.table');
    }
}
