<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Ustawienia Fathom Analytics',
    'section_title' => 'Konfiguracja śledzenia',
    'fields' => [
        'website_id' => [
            'label' => 'ID witryny',
            'helper' => 'Identyfikator witryny Fathom (np. ABCDEFGH). Znajdziesz go w panelu Fathom w sekcji Site Settings.',
        ],
        'canonical' => [
            'label' => 'Użyj kanonicznego URL',
            'helper' => 'Po włączeniu Fathom będzie używać kanonicznego URL zamiast rzeczywistego URL do śledzenia.',
        ],
        'auto' => [
            'label' => 'Automatyczne śledzenie',
            'helper' => 'Automatycznie rejestruj odsłony przy ładowaniu strony.',
        ],
        'spa' => [
            'label' => 'Tryb SPA',
            'helper' => 'Tryb śledzenia aplikacji jednostronicowych. Wybierz metodę routingu używaną przez aplikację.',
            'placeholder' => 'Wyłączony',
        ],
        'honor_dnt' => [
            'label' => 'Respektuj Do Not Track',
            'helper' => 'Po włączeniu Fathom będzie respektować ustawienie Do Not Track przeglądarki.',
        ],
    ],
];
