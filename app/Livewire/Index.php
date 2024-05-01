<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.index')->layout('components.app');
    }
}
