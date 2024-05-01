<?php

namespace App\Filament\Resources\GameResource\Pages;

use App\Filament\Resources\GameResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListGames extends ListRecords
{
    protected static string $resource = GameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all' => Tab::make('All Games'),
            'future' => Tab::make('Future Games')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '>=', now())),
            'past' => Tab::make('Past Games')
                ->modifyQueryUsing(fn (Builder $query) => $query->where('date', '<', now())),
        ];
    }
}
