<?php

namespace App\Livewire\Backend\Rooms;

use App\Models\Room;
use Livewire\Attributes\Layout;
use Mary\Traits\Toast;
use Livewire\Component;

class ViewRoom extends Component
{
    use Toast;

    public Room $room;

    public function mount()
    {
        //
    }

    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.rooms.view-room');
    }
}
