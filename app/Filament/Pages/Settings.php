<?php

namespace App\Filament\Pages;

use App\Social;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Pages\Page;

class Settings extends Page
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.settings';

    protected static ?int $navigationSort = 4;

    public ?array $data = [];

    public function mount(): void
    {
        $this->form->fill(
            auth()->user()->attributesToArray()
        );
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('banner_image')
                    ->image()
                    ->optimize('webp')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                        '4:3',
                        '1:1',
                    ])
                    ->label('Banner Image')
                    ->directory('team-banners')
                    ->columnSpanFull(),
                Repeater::make('social_links')
                    ->schema([
                        Select::make('platform')
                            ->options(Social::class),
                        TextInput::make('url')
                            ->url()
                            ->label('URL'),
                    ])
                    ->columns(2)
                    ->label('Social Links'),
            ])
            ->statePath('data')
            ->model(auth()->user());
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('Update')
                ->color('primary')
                ->submit('Update'),
        ];
    }

    public function update()
    {
        auth()->user()->update($this->form->getState());

        Notification::make()
            ->title('Settings Updated')
            ->success()
            ->send();
    }
}
