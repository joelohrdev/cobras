<?php

namespace App\Livewire;

use App\Models\Tournament;
use App\Models\User;
use Carbon\Carbon;
use Livewire\Component;

class FutureTournaments extends Component
{
    public User $user;

    public function render()
    {
        return view('livewire.future-tournaments', [
            'tournaments' => Tournament::query()
                ->where('end_date', '>', Carbon::now()->toDateString())
                ->orderBy('date')
                ->get()
                ->groupBy(fn ($val) => Carbon::parse($val->start_date)->format('F')),
        ]);
    }
}
