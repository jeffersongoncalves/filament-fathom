<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics-instellingen',
    'section_title' => 'Trackingconfiguratie',
    'fields' => [
        'website_id' => [
            'label' => 'Website-ID',
            'helper' => 'Je Fathom-site-ID (bijv. ABCDEFGH). Te vinden in je Fathom-dashboard onder Site Settings.',
        ],
        'canonical' => [
            'label' => 'Canonieke URL gebruiken',
            'helper' => 'Indien ingeschakeld gebruikt Fathom de canonieke URL in plaats van de werkelijke URL voor tracking.',
        ],
        'auto' => [
            'label' => 'Automatische tracking',
            'helper' => 'Paginaweergaven automatisch bijhouden bij het laden van de pagina.',
        ],
        'spa' => [
            'label' => 'SPA-modus',
            'helper' => 'Trackingmodus voor single-page-applicaties. Selecteer de routeringsmethode die je applicatie gebruikt.',
            'placeholder' => 'Uitgeschakeld',
        ],
        'honor_dnt' => [
            'label' => 'Do Not Track respecteren',
            'helper' => 'Indien ingeschakeld respecteert Fathom de Do Not Track-instelling van de browser.',
        ],
    ],
];
