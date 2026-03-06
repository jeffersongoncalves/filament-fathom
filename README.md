<div class="filament-hidden">

![Filament Fathom](https://raw.githubusercontent.com/jeffersongoncalves/filament-fathom/3.x/art/jeffersongoncalves-filament-fathom.png)

</div>

# Filament Fathom

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-fathom)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-fathom/fix-php-code-style-issues.yml?branch=3.x&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-fathom/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3A3.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-fathom)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-fathom.svg?style=flat-square)](LICENSE.md)

Filament plugin for [Fathom Analytics](https://usefathom.com/) with a built-in settings page. Automatically injects the Fathom tracking script into all Filament panels and provides a settings page to manage tracking configuration directly from the admin panel.

## Version Compatibility

| Branch | Filament | PHP | Laravel |
|--------|----------|-----|---------|
| 1.x | 3.x | ^8.2 | ^11.0 |
| 2.x | 4.x | ^8.2 | ^11.0 |
| 3.x | 5.x | ^8.2 | ^11.0 |

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or higher
- Filament 5.x

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-fathom:"^3.0"
```

Publish and run the spatie/laravel-settings migrations:

```bash
php artisan vendor:publish --provider="Spatie\LaravelSettings\LaravelSettingsServiceProvider" --tag="migrations"
```

Publish and run the Fathom settings migrations:

```bash
php artisan vendor:publish --tag=fathom-settings-migrations
php artisan migrate
```

Register the plugin in your Filament PanelProvider:

```php
use JeffersonGoncalves\Filament\Fathom\FathomPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        // ...
        ->plugins([
            FathomPlugin::make(),
        ]);
}
```

## Settings Page

The plugin provides a settings page where you can configure:

- **Website ID** - Your Fathom site ID (e.g. ABCDEFGH)
- **Canonical URL** - Use canonical URL instead of actual URL for tracking
- **Auto Tracking** - Automatically track page views on page load
- **SPA Mode** - Single Page Application tracking mode (auto, history, hash)
- **Honor Do Not Track** - Respect the browser Do Not Track setting

### Disabling the Settings Page

If you only want the automatic script injection without the settings page:

```php
FathomPlugin::make()->settingsPage(false)
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jefferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
