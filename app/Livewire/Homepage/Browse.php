<?php

namespace App\Livewire\Homepage;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;

class Browse extends Component
{
    use WithPagination;

    public function render()
    {
        return view('livewire.homepage.browse',[
            'rooms' => DB::table('rooms')->orderBy('title', 'asc')->paginate(10)
        ]);
    }
}
