<?php

namespace JeffersonGoncalves\Filament\Fathom\Pages;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;
use JeffersonGoncalves\Fathom\Settings\FathomSettings;

class FathomSettingsPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

    protected static string $settings = FathomSettings::class;

    public static function getNavigationGroup(): ?string
    {
        return __('filament-fathom::fathom.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-fathom::fathom.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-fathom::fathom.title');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make(__('filament-fathom::fathom.section_title'))
                    ->schema([
                        TextInput::make('website_id')
                            ->label(__('filament-fathom::fathom.fields.website_id.label'))
                            ->helperText(__('filament-fathom::fathom.fields.website_id.helper'))
                            ->placeholder('ABCDEFGH'),

                        Toggle::make('canonical')
                            ->label(__('filament-fathom::fathom.fields.canonical.label'))
                            ->helperText(__('filament-fathom::fathom.fields.canonical.helper')),

                        Toggle::make('auto')
                            ->label(__('filament-fathom::fathom.fields.auto.label'))
                            ->helperText(__('filament-fathom::fathom.fields.auto.helper')),

                        Select::make('spa')
                            ->label(__('filament-fathom::fathom.fields.spa.label'))
                            ->helperText(__('filament-fathom::fathom.fields.spa.helper'))
                            ->options([
                                'auto' => 'Auto',
                                'history' => 'History',
                                'hash' => 'Hash',
                            ])
                            ->placeholder(__('filament-fathom::fathom.fields.spa.placeholder')),

                        Toggle::make('honor_dnt')
                            ->label(__('filament-fathom::fathom.fields.honor_dnt.label'))
                            ->helperText(__('filament-fathom::fathom.fields.honor_dnt.helper')),
                    ]),
            ]);
    }
}
