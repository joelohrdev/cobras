<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class TeamsIndex extends Component
{
    public function render()
    {
        return view('livewire.teams-index', [
            'teams' => User::query()
                ->where('is_admin', false)
                ->select(['slug', 'division'])
                ->get(),
        ]);
    }
}
