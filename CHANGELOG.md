# Changelog

All notable changes to this project will be documented in this file.

## 2.2.0 - 2026-06-23

Refactor onto `filament-analytics-core` base classes; drop redundant dependencies (provided transitively via the cores).

## v2.1.1 - 2026-03-04

### Breaking Changes

- **Minimum Filament version bumped to `^4.8`** — required due to the new `PageConfiguration` parameter added to `Page::routes()` in [filamentphp/filament#19225](https://github.com/filamentphp/filament/pull/19225)

### What's Changed

- Update `composer.json` to require `filament/filament: ^4.8`

## v2.1.0 - 2026-02-22

### What's Changed

* Bump aglipanci/laravel-pint-action from 2.5 to 2.6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/7
* Bump actions/checkout from 4 to 5 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/8
* Bump stefanzweifel/git-auto-commit-action from 6 to 7 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/9
* Bump actions/checkout from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/10
* Bump dependabot/fetch-metadata from 2.4.0 to 2.5.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/11

**Full Changelog**: https://github.com/jeffersongoncalves/filament-fathom/compare/2.0.0...v2.1.0

## 2.1.0 - 2026-02-22

### Added

- Settings page for managing Fathom analytics configuration from the admin panel
- `FathomPlugin` class implementing `Filament\Contracts\Plugin`
- Translations for English (en) and Brazilian Portuguese (pt_BR)
- `settingsPage()` method to enable/disable the settings page

### Changed

- Updated `jeffersongoncalves/laravel-fathom` dependency from `^1.0` to `^3.0`
- Added `filament/spatie-laravel-settings-plugin` dependency
- Removed `laravel/framework` from direct dependencies
- Updated package description and keywords

## 2.0.0 - 2025-07-17

### What's Changed

* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/1
* Bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/2
* Configure Renovate by @renovate[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/3
* Delete .github/FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/5
* Delete renovate.json by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/6

### New Contributors

* @dependabot[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-fathom/pull/1
* @renovate[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-fathom/pull/3
* @jeffersongoncalves made their first contribution in https://github.com/jeffersongoncalves/filament-fathom/pull/5

**Full Changelog**: https://github.com/jeffersongoncalves/filament-fathom/compare/1.0.0...2.0.0

## 1.0.0 - 2025-05-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-fathom/commits/1.0.0
