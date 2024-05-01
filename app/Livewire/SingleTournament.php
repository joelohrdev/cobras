<?php

namespace App\Livewire;

use App\Models\Tournament;
use App\Models\User;
use Livewire\Component;

class SingleTournament extends Component
{
    public User $user;

    public Tournament $tournament;

    public function render()
    {
        return view('livewire.single-tournament', [
            'games' => $this->tournament->games,
        ])->layout('components.app');
    }
}
