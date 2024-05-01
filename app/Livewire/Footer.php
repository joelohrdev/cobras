<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Footer extends Component
{
    public User $user;
    public function render()
    {
        return view('livewire.footer', [
            'links' => collect($this->user->social_links)
        ]);
    }
}
