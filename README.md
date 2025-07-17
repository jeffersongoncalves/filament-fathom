<div class="filament-hidden">

![Filament Fathom](https://raw.githubusercontent.com/jeffersongoncalves/filament-fathom/master/art/jeffersongoncalves-filament-fathom.png)

</div>

# Filament Fathom

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-fathom)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-fathom/fix-php-code-style-issues.yml?branch=master&label=code%20style&style=flat-square)](https://github.com/jeffersongoncalves/filament-fathom/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-fathom.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-fathom)

This Filament package seamlessly integrates Fathom analytics into your Blade templates. Easily track website visits and user engagement directly within your Laravel application, providing valuable insights into your website's performance. This package simplifies the integration process, saving you time and effort. With minimal configuration, you can leverage Fathom's powerful analytics features to gain a clearer understanding of your audience and website usage.

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-fathom
```

This package depends on [jeffersongoncalves/laravel-fathom](https://github.com/jeffersongoncalves/laravel-fathom) which will be automatically installed as a dependency.

## Usage

Publish config file.

```bash
php artisan vendor:publish --tag=fathom-config
```

Add head template.

```php
@include('fathom::script')
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

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
