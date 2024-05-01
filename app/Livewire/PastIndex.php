<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class PastIndex extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.past-index')->layout('components.app');
    }
}
