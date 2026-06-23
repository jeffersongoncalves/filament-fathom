<?php

namespace JeffersonGoncalves\Filament\Fathom;

use JeffersonGoncalves\Filament\Fathom\Pages\FathomSettingsPage;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class FathomPlugin extends AbstractAnalyticsPlugin
{
    public function getId(): string
    {
        return 'filament-fathom';
    }

    protected function getSettingsPageClass(): ?string
    {
        return FathomSettingsPage::class;
    }
}
