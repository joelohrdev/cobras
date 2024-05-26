<?php

namespace App\Livewire;

use App\Models\Tournament;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class PastTournaments extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.past-tournaments', [
            'tournaments' => $this->user->tournaments()
                ->where('end_date', '<', Carbon::now()->toDateString())
                ->orderBy('date', 'desc')
                ->get()
                ->groupBy(fn ($val) => Carbon::parse($val->start_date)->format('F')),
        ])->layout('components.app');
    }
}
