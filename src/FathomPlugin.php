<?php

namespace JeffersonGoncalves\Filament\Fathom;

use Filament\Contracts\Plugin;
use Filament\Panel;
use JeffersonGoncalves\Filament\Fathom\Pages\FathomSettingsPage;

class FathomPlugin implements Plugin
{
    protected bool $hasSettingsPage = true;

    public static function make(): static
    {
        return app(static::class);
    }

    public static function get(): static
    {
        /** @var static $plugin */
        $plugin = filament(app(static::class)->getId());

        return $plugin;
    }

    public function getId(): string
    {
        return 'filament-fathom';
    }

    public function register(Panel $panel): void
    {
        if ($this->hasSettingsPage) {
            $panel->pages([
                FathomSettingsPage::class,
            ]);
        }
    }

    public function boot(Panel $panel): void {}

    public function settingsPage(bool $condition = true): static
    {
        $this->hasSettingsPage = $condition;

        return $this;
    }
}
