<?php

use Filament\Facades\Filament;
use Filament\Support\Facades\FilamentView;
use Filament\View\PanelsRenderHook;
use Illuminate\Foundation\Auth\User;
use JeffersonGoncalves\Fathom\Settings\FathomSettings;
use JeffersonGoncalves\Filament\Fathom\FathomPlugin;
use JeffersonGoncalves\Filament\Fathom\Pages\FathomSettingsPage;
use Livewire\Livewire;

beforeEach(function () {
    Filament::setCurrentPanel(Filament::getPanel('test'));
    $this->actingAs((new User)->forceFill(['id' => 1, 'name' => 'Admin', 'email' => 'admin@example.com']));
});

it('registers the settings page on the panel', function () {
    expect(Filament::getPanel('test')->getPages())->toContain(FathomSettingsPage::class)
        ->and(FathomPlugin::make()->getId())->toBe('filament-fathom');
});

it('ships translated labels', function () {
    expect(FathomSettingsPage::getNavigationLabel())->not->toContain('::')
        ->and((new FathomSettingsPage)->getTitle())->not->toContain('::');
});

it('saves the settings from the page', function () {
    Livewire::test(FathomSettingsPage::class)
        ->fillForm(['website_id' => 'TESTSITE'])
        ->call('save')
        ->assertHasNoFormErrors();

    $settings = app(FathomSettings::class)->refresh();
    expect($settings->website_id)->toBe('TESTSITE');
});

it('injects the script into the panel once configured', function () {
    $settings = app(FathomSettings::class);
    $settings->website_id = 'TESTSITE';
    $settings->save();

    $html = (string) FilamentView::renderHook(PanelsRenderHook::HEAD_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::HEAD_END)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_START)
        .(string) FilamentView::renderHook(PanelsRenderHook::BODY_END);

    expect($html)->toContain('cdn.usefathom.com');
});
