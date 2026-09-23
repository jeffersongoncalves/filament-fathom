<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Налаштування Fathom Analytics',
    'section_title' => 'Налаштування відстеження',
    'fields' => [
        'website_id' => [
            'label' => 'ID сайту',
            'helper' => 'ID вашого сайту у Fathom (наприклад, ABCDEFGH). Знаходиться в панелі Fathom у розділі Site Settings.',
        ],
        'canonical' => [
            'label' => 'Використовувати канонічний URL',
            'helper' => 'Якщо увімкнено, Fathom використовуватиме канонічний URL замість фактичного URL для відстеження.',
        ],
        'auto' => [
            'label' => 'Автоматичне відстеження',
            'helper' => 'Автоматично відстежувати перегляди сторінок під час завантаження.',
        ],
        'spa' => [
            'label' => 'Режим SPA',
            'helper' => 'Режим відстеження односторінкових застосунків. Виберіть спосіб маршрутизації, який використовує застосунок.',
            'placeholder' => 'Вимкнено',
        ],
        'honor_dnt' => [
            'label' => 'Враховувати Do Not Track',
            'helper' => 'Якщо увімкнено, Fathom враховуватиме налаштування браузера Do Not Track.',
        ],
    ],
];
