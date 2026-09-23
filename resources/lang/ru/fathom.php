<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Настройки Fathom Analytics',
    'section_title' => 'Настройка отслеживания',
    'fields' => [
        'website_id' => [
            'label' => 'ID сайта',
            'helper' => 'ID вашего сайта в Fathom (например, ABCDEFGH). Находится в панели Fathom в разделе Site Settings.',
        ],
        'canonical' => [
            'label' => 'Использовать канонический URL',
            'helper' => 'Если включено, Fathom будет использовать канонический URL вместо фактического URL для отслеживания.',
        ],
        'auto' => [
            'label' => 'Автоматическое отслеживание',
            'helper' => 'Автоматически отслеживать просмотры страниц при загрузке.',
        ],
        'spa' => [
            'label' => 'Режим SPA',
            'helper' => 'Режим отслеживания одностраничных приложений. Выберите способ маршрутизации, используемый приложением.',
            'placeholder' => 'Отключено',
        ],
        'honor_dnt' => [
            'label' => 'Учитывать Do Not Track',
            'helper' => 'Если включено, Fathom будет учитывать настройку браузера Do Not Track.',
        ],
    ],
];
