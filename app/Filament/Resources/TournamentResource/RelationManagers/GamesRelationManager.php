<?php

namespace App\Filament\Resources\TournamentResource\RelationManagers;

use App\State;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class GamesRelationManager extends RelationManager
{
    protected static string $relationship = 'games';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('opponent')->columnSpanFull()->required(),
                Forms\Components\DatePicker::make('date')->columnSpanFull()->required(),
                Forms\Components\TextInput::make('city'),
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('date')
            ->columns([
                Tables\Columns\TextColumn::make('date')->date(),
                Tables\Columns\TextColumn::make('opponent'),
                Tables\Columns\TextColumn::make('outcome'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
