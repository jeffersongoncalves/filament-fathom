<div class="filament-hidden">

![Filament Fathom](https://raw.githubusercontent.com/jeffersongoncalves/filament-fathom/master/art/jeffersongoncalves-filament-fathom.png)

</div>

# Filament Fathom

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-fathom)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-fathom/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-fathom/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-fathom)

This Filament package seamlessly integrates Fathom analytics into your Filament admin panels. It automatically injects the Fathom tracking script into all Filament panels, allowing you to track admin user engagement and panel usage directly within your Laravel application. This package simplifies the integration process by automatically handling the script injection, saving you time and effort. With minimal configuration, you can leverage Fathom's powerful analytics features to gain valuable insights into your admin panel usage.

## Requirements

- PHP 8.2 or higher
- Laravel 11.0 or higher
- Filament 4.0 or higher

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-fathom
```

This package depends on [jeffersongoncalves/laravel-fathom](https://github.com/jeffersongoncalves/laravel-fathom) which will be automatically installed as a dependency.

The service provider will be automatically discovered and registered by Laravel. No additional setup is required.

## Usage

This package automatically integrates with your Filament admin panels. Once installed and configured, the Fathom tracking script will be automatically injected into all Filament panel pages.

1. Publish the Fathom configuration file:

```bash
php artisan vendor:publish --tag=fathom-config
```

2. Configure your Fathom site ID in the published configuration file or set the `FATHOM_SITE_ID` environment variable.

That's it! The package will automatically inject the Fathom analytics script into your Filament admin panels. No manual template modifications are required.

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

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
