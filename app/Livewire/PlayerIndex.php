<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class PlayerIndex extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.player-index', [
            'players' => $this->user->players()->orderBy('name')->get(),
        ])->layout('components.app');
    }
}
