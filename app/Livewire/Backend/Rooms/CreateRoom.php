<?php

namespace App\Livewire\Backend\Rooms;

use App\Models\Room;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Mary\Traits\Toast;

class CreateRoom extends Component
{

    use Toast;

    #[Validate('required')]
    public $title = '';

    #[Validate('required')]
    public $full_desc = '';

    #[Validate('required')]
    public $short_desc = '';

    #[Validate('required')]
    public $p_bathroom = '';

    #[Validate('required')]
    public $p_kitchen = '';

    #[Validate('required')]
    public $p_laundry = '';

    #[Validate('required')]
    public $price = '';

    public function createRoom()
    {
        $validated = $this->validate();

        Room::create($validated);
        $this->reset();
        $this->success('Room Successfully Posted!', timeout:3000);
        return redirect()->back();
    }

    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.rooms.create-room');
    }
}
