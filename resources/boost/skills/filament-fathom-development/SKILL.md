---
name: filament-fathom-development
description: Build and work with Filament Fathom plugin features, including Fathom Analytics settings page, automatic script injection, and tracking configuration.
---

# Filament Fathom Development

## When to use this skill

Use this skill when:
- Adding or modifying Fathom Analytics integration in a Filament panel
- Customizing the Fathom settings page fields or behavior
- Debugging Fathom script injection issues
- Working with the `FathomPlugin`, `FathomSettingsPage`, or `FathomServiceProvider` classes
- Configuring SPA tracking modes or Do Not Track compliance

## Package Overview

- **Package**: `jeffersongoncalves/filament-fathom` (branch `3.x` for Filament 5)
- **Namespace**: `JeffersonGoncalves\Filament\Fathom`
- **Dependencies**: `filament/filament:^5.0`, `filament/spatie-laravel-settings-plugin:^5.0`, `jeffersongoncalves/laravel-fathom:^3.0`
- **Service Provider**: `JeffersonGoncalves\Filament\Fathom\FathomServiceProvider`

## Version Compatibility

| Branch | Filament | PHP | Laravel |
|--------|----------|-----|---------|
| 1.x | 3.x | ^8.2 | ^11.0 |
| 2.x | 4.x | ^8.2 | ^11.0 |
| 3.x | 5.x | ^8.2 | ^11.0 |

## Configuration

### Basic Setup

Register the plugin in your `PanelProvider`:

```php
use JeffersonGoncalves\Filament\Fathom\FathomPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FathomPlugin::make(),
        ]);
}
```

### Disable Settings Page

If you only want automatic script injection without the admin settings page:

```php
FathomPlugin::make()->settingsPage(false)
```

### Migrations

Publish and run both Spatie and Fathom settings migrations:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=fathom-settings-migrations
php artisan migrate
```

## Architecture

### Plugin Class (`FathomPlugin`)

```php
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
```

### Service Provider (`FathomServiceProvider`)

The service provider registers the Fathom tracking script via render hooks:

```php
namespace JeffersonGoncalves\Filament\Fathom;

use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Contracts\View\View;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FathomServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-fathom')
            ->hasTranslations();
    }

    public function packageRegistered(): void
    {
        FilamentView::registerRenderHook(PanelsRenderHook::HEAD_START, fn (): View => view('fathom::script'));
    }
}
```

### Settings Page (`FathomSettingsPage`)

The settings page uses `Filament\Pages\SettingsPage` with `JeffersonGoncalves\Fathom\Settings\FathomSettings`:

```php
namespace JeffersonGoncalves\Filament\Fathom\Pages;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\Fathom\Settings\FathomSettings;

class FathomSettingsPage extends SettingsPage
{
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar';
    protected static string $settings = FathomSettings::class;

    public function form(Schema $schema): Schema
    {
        return $schema
            ->columns(null)
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
```

## Settings Fields

| Field | Type | Description |
|-------|------|-------------|
| `website_id` | TextInput | Your Fathom site ID (e.g., `ABCDEFGH`) |
| `canonical` | Toggle | Use canonical URL instead of actual URL for tracking |
| `auto` | Toggle | Automatically track page views on page load |
| `spa` | Select | SPA tracking mode: `auto`, `history`, or `hash` |
| `honor_dnt` | Toggle | Respect browser Do Not Track setting |

## Translations

Translations are loaded from `filament-fathom::fathom.*` namespace. Key translation keys:
- `filament-fathom::fathom.navigation_group`
- `filament-fathom::fathom.navigation_label`
- `filament-fathom::fathom.title`
- `filament-fathom::fathom.section_title`
- `filament-fathom::fathom.fields.website_id.label`
- `filament-fathom::fathom.fields.canonical.label`
- `filament-fathom::fathom.fields.auto.label`
- `filament-fathom::fathom.fields.spa.label`
- `filament-fathom::fathom.fields.honor_dnt.label`

## Troubleshooting

### Fathom script not injecting
**Cause**: The `fathom::script` view is not found, or the `laravel-fathom` base package is not installed.
**Solution**: Ensure `jeffersongoncalves/laravel-fathom:^3.0` is installed and service providers are discovered.

### Settings page not appearing
**Cause**: Migrations not published or run.
**Solution**: Run both `vendor:publish` commands for Spatie settings and Fathom settings migrations, then `php artisan migrate`.

### Settings not persisting
**Cause**: The `spatie/laravel-settings` migrations were not published.
**Solution**: Publish the Spatie migrations first: `php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"` then run `php artisan migrate`.
