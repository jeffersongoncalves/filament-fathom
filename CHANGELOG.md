# Changelog

All notable changes to this project will be documented in this file.

## 1.3.0 - 2026-09-23

### What's new

- **Translations:** 17 new locales (ar, az, de, es, fa, fr, hi, it, ja, nl, pl, pt, ru, tr, uk, uz, zh_CN). (#33)

Thanks to @Elvin-Qulizade (Elvin Qulizada) for the i18n initiative behind these translations — first contributed in jeffersongoncalves/filament-scanner-guard#2 and now rolled out across the Filament plugins. He is credited as co-author.

### What's Changed

* docs: add Buy Me a Coffee sponsor link by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/17
* chore: add Buy Me a Coffee to FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/22
* ci: standardize update-changelog workflow (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/23
* build(deps): bump the actions-deps group with 4 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/27
* build(deps): bump the composer-deps group with 2 updates by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/28
* feat(i18n): add translations (1.x) by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/33

**Full Changelog**: https://github.com/jeffersongoncalves/filament-fathom/compare/1.2.0...1.3.0

## 1.2.0 - 2026-06-23

Refactor onto `filament-analytics-core` base classes; drop redundant dependencies (provided transitively via the cores).

## v1.1.0 - 2026-02-22

### What's Changed

* Bump dependabot/fetch-metadata from 2.3.0 to 2.4.0 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/1
* Bump stefanzweifel/git-auto-commit-action from 5 to 6 by @dependabot[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/2
* Configure Renovate by @renovate[bot] in https://github.com/jeffersongoncalves/filament-fathom/pull/3
* Delete .github/FUNDING.yml by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/5
* Delete renovate.json by @jeffersongoncalves in https://github.com/jeffersongoncalves/filament-fathom/pull/6

### New Contributors

* @renovate[bot] made their first contribution in https://github.com/jeffersongoncalves/filament-fathom/pull/3

**Full Changelog**: https://github.com/jeffersongoncalves/filament-fathom/compare/1.0.0...v1.1.0

## 1.1.0 - 2026-02-22

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

## 1.0.0 - 2025-05-01

**Full Changelog**: https://github.com/jeffersongoncalves/filament-fathom/commits/1.0.0
