<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GameResource\Pages;
use App\Models\Game;
use App\State;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class GameResource extends Resource
{
    protected static ?string $model = Game::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';

    protected ?string $subheading = 'Only add single games here. Any games that are part of a tournament should be added to the tournament.';

    protected static ?int $navigationSort = 3;

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', auth()->user()->id)->where('tournament_id', '=', null);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('opponent')->columnSpanFull()->required(),
                Forms\Components\DatePicker::make('date')->columnSpanFull()->required(),
                Forms\Components\TextInput::make('city')->required(),
                Forms\Components\Select::make('state')->options(State::class),
                Forms\Components\Select::make('outcome')
                    ->options([
                        'win' => 'Win',
                        'loss' => 'Loss',
                        'tie' => 'Tie',
                    ])->columnSpanFull(),
                Forms\Components\TextInput::make('our_score')->numeric(),
                Forms\Components\TextInput::make('opponent_score')->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('opponent')->sortable(),
                Tables\Columns\TextColumn::make('date')->date()->sortable(),
                Tables\Columns\TextColumn::make('city')->sortable(),
                Tables\Columns\TextColumn::make('state')->sortable(),
                Tables\Columns\TextColumn::make('outcome')->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGames::route('/'),
            'create' => Pages\CreateGame::route('/create'),
            'edit' => Pages\EditGame::route('/{record}/edit'),
        ];
    }
}
