<?php

namespace App\Filament\Resources\TournamentResource\Pages;

use App\Filament\Resources\TournamentResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListTournaments extends ListRecords
{
    protected static string $resource = TournamentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Tournaments'),
            'future' => Tab::make('Future Tournaments')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now())),
            'past' => Tab::make('Past Tournaments')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '<', now())),
        ];
    }
}
