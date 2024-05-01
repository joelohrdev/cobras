<?php

namespace App\Livewire;

use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class FutureGames extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.future-games', [
            'games' => $this->user->games()->where('date', '>', Carbon::now()->toDateString())
                ->with('tournament')
                ->orderBy('date')
                ->get()
                ->groupBy(fn ($val) => Carbon::parse($val->date)->format('F')),
        ]);
    }
}
