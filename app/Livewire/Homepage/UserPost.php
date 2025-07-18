<?php

namespace App\Livewire\Homepage;

use App\Models\Room;
use App\Models\User;
use Mary\Traits\Toast;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserPost extends Component
{

    use Toast;

    #[Validate('required')]
    public $uid;

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

    public function createRoom(User $user)
    {
        // Deduction value
        $post_cred = 3;

        if(Auth::user()->credits >= 3){

            $this->validate();

            Room::create([
                'uid' => Auth::user()->id,
                'title' => $this->title,
                'full_desc' => $this->full_desc,
                'short_desc' => $this->short_desc,
                'p_bathroom' => $this->p_bathroom,
                'p_kitchen' => $this->p_kitchen,
                'p_laundry' => $this->p_laundry,
                'price' => $this->price,

            ]);

            // Credit deduction
            DB::table('users' ,$user->id)->decrement('credits', $post_cred);

            $this->reset();
            $this->success('Posted Successfully');
            return redirect()->back();
        }
            $this->warning('Not Enough Credits');
            return redirect()->back();
    }

    public function render()
    {
        return view('livewire.homepage.user-post');
    }
}
