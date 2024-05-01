<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class PastGames extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.past-games', [
            'games' => $this->user->games()->where('date', '<', Carbon::now()->toDateString())
                ->with('tournament')
                ->orderBy('date', 'desc')
                ->get()
                ->groupBy(fn ($val) => Carbon::parse($val->date)->format('F')),
        ])->layout('components.app');
    }
}
