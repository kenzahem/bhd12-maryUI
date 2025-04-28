<?php

namespace App\Livewire\Backend\Rooms;

use App\Models\Room;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Pagination\LengthAwarePaginator;
use Mary\Traits\Toast;

class Table extends Component
{
    use Toast, WithPagination;

    public function rooms()
    {
        return Room::paginate(10);
    }

    public function headers(): array
    {
        return [
            ['key' => 'id', 'label' => '#', 'class' => 'w-1'],
            ['key' => 'title', 'label' => 'Room Title', 'class' => 'w-1/4'],
            ['key' => 'short_desc', 'label' => 'Short Description', 'class' => 'w-1/4'],
            ['key' => 'price', 'label' => 'Prices', 'sortable' => false],
        ];
    }


    public function deleteRoom(Room $room)
    {
        $room->delete();
        $this->warning('Poof!', icon:'lucide.circle-alert', position:'toast-top toast-center');
        return redirect()->to('/admin/rooms');
    }

    #[Layout('components.layouts.backend')]
    public function render()
    {
        return view('livewire.backend.rooms.table',[
            'headers' => $this->headers(),
            'rooms' => $this->rooms()
        ]);
    }
}
