<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class TournamentIndex extends Component
{
    public User $user;
    public function render()
    {
        return view('livewire.tournament-index')->layout('components.app');
    }
}
