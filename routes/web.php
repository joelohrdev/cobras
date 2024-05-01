<?php

use App\Livewire\CoachIndex;
use App\Livewire\Index;
use App\Livewire\PastIndex;
use App\Livewire\PastTournaments;
use App\Livewire\PlayerIndex;
use App\Livewire\SingleTournament;
use App\Livewire\TournamentIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () { return view('index'); })->name('home');

Route::get('/{user:slug}', Index::class)->name('team.index');
Route::get('/{user:slug}/past-games', PastIndex::class)->name('team.past-games');

Route::get('/{user:slug}/tournaments', TournamentIndex::class)->name('team.tournaments');
Route::get('/{user:slug}/past-tournaments', PastTournaments::class)->name('team.past-tournaments');
Route::get('/{user:slug}/tournaments/{tournament:uuid}', SingleTournament::class)->name('team.tournaments.show');

Route::get('/{user:slug}/players', PlayerIndex::class)->name('team.players');

Route::get('/{user:slug}/coaches', CoachIndex::class)->name('team.coaches');
