<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CoachIndex extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.coach-index', [
            'coaches' => $this->user->coaches()->orderBy('name')->get(),
        ])->layout('components.app');
    }
}
