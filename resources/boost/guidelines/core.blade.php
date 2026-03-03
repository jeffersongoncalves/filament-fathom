## Filament Fathom

Filament plugin for Fathom Analytics with a built-in settings page. Automatically injects the Fathom tracking script into all Filament panels and provides a settings page to manage tracking configuration directly from the admin panel.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-fathom:"^3.0"
</code-snippet>
@endverbatim

Publish and run the settings migrations:

@verbatim
<code-snippet name="Publish and run migrations" lang="bash">
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
php artisan vendor:publish --tag=fathom-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\Fathom\FathomPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            FathomPlugin::make(),
        ]);
}
</code-snippet>
@endverbatim

### Disable Settings Page

@verbatim
<code-snippet name="Disable the settings page" lang="php">
FathomPlugin::make()->settingsPage(false)
</code-snippet>
@endverbatim

### Features
- Settings page to configure Fathom tracking (Website ID, Canonical URL, Auto Tracking, SPA Mode, Honor DNT)
- Automatic injection of the Fathom tracking script into `<head>` via `PanelsRenderHook::HEAD_START`
- Uses `spatie/laravel-settings` for persistent settings storage
- Uses `jeffersongoncalves/laravel-fathom` as the core analytics package
- Supports translations via language files (`filament-fathom::fathom.*`)

### Architecture
- `FathomPlugin` implements `Filament\Contracts\Plugin` and registers `FathomSettingsPage`
- `FathomServiceProvider` extends `PackageServiceProvider` and registers the render hook for script injection
- `FathomSettingsPage` extends `Filament\Pages\SettingsPage` with fields: `website_id`, `canonical`, `auto`, `spa`, `honor_dnt`
- Settings are stored via `JeffersonGoncalves\Fathom\Settings\FathomSettings` class

### Best Practices
- Always publish both Spatie and Fathom settings migrations before running `php artisan migrate`
- Use `settingsPage(false)` when you want automatic script injection without the admin UI
- Configure settings through the admin panel rather than directly editing the database
- SPA mode options are: `auto`, `history`, `hash` -- choose based on your application's routing strategy
