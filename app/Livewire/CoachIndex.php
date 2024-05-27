<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CoachIndex extends Component
{
    public User $user;

    private function coaches()
    {
        $coaches = $this->user->coaches()->orderBy('name')->get()->groupBy('position')->toArray();

        // Define the desired order
        $order = ['Manager', 'Assistant Coach', 'Other'];

        // Sort the groups according to the defined order
        uksort($coaches, function($key1, $key2) use ($order) {
            return array_search($key1, $order) <=> array_search($key2, $order);
        });

        // Sort each group by name
        foreach ($coaches as $position => $coachesInPosition) {
            $coaches[$position] = collect($coachesInPosition)->sortBy('name')->values()->all();
        }

        //return collection of coaches
        return collect($coaches);
    }

    public function initials($coach)
    {
        return collect(explode(' ', $coach['name']))->map(fn ($name) => strtoupper($name[0]))->implode('');
    }

    public function render()
    {
        return view('livewire.coach-index', [
            'coaches' => $this->coaches(),
        ])->layout('components.app');
    }
}
