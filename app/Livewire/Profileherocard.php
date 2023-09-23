<?php

namespace App\Livewire;

use Livewire\Attributes\On;
use Livewire\Component;

class Profileherocard extends Component
{
    #[On('profile-updated')]
    public function render()
    {
        return view('livewire.Profile.profileherocard');
    }
}
