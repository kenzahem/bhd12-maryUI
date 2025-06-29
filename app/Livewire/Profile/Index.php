<?php

namespace App\Livewire\Profile;

use Mary\Traits\Toast;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Index extends Component
{

    use Toast;

    public $name;

    public $email;

    public $verified;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
        $this->verified = Auth::user()->verified;
    }


    public function render()
    {
        return view('livewire.profile.index');
    }
}
