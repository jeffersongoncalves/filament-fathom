<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics parametrləri',
    'section_title' => 'İzləmə konfiqurasiyası',
    'fields' => [
        'website_id' => [
            'label' => 'Sayt ID',
            'helper' => 'Fathom sayt ID-niz (məs. ABCDEFGH). Fathom panelində Site Settings bölməsində tapılır.',
        ],
        'canonical' => [
            'label' => 'Kanonik URL istifadə et',
            'helper' => 'Aktiv olduqda Fathom izləmə üçün faktiki URL əvəzinə kanonik URL-dən istifadə edəcək.',
        ],
        'auto' => [
            'label' => 'Avtomatik izləmə',
            'helper' => 'Səhifə yüklənəndə səhifə baxışlarını avtomatik izləyin.',
        ],
        'spa' => [
            'label' => 'SPA rejimi',
            'helper' => 'Tək səhifəli tətbiq izləmə rejimi. Tətbiqinizin istifadə etdiyi marşrutlaşdırma üsulunu seçin.',
            'placeholder' => 'Deaktiv',
        ],
        'honor_dnt' => [
            'label' => 'Do Not Track-a hörmət et',
            'helper' => 'Aktiv olduqda Fathom brauzerin Do Not Track parametrinə hörmət edəcək.',
        ],
    ],
];
