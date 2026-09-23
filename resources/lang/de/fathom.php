<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics-Einstellungen',
    'section_title' => 'Tracking-Konfiguration',
    'fields' => [
        'website_id' => [
            'label' => 'Website-ID',
            'helper' => 'Ihre Fathom-Site-ID (z. B. ABCDEFGH). Zu finden in Ihrem Fathom-Dashboard unter Site Settings.',
        ],
        'canonical' => [
            'label' => 'Kanonische URL verwenden',
            'helper' => 'Wenn aktiviert, verwendet Fathom die kanonische URL anstelle der tatsächlichen URL für das Tracking.',
        ],
        'auto' => [
            'label' => 'Automatisches Tracking',
            'helper' => 'Seitenaufrufe beim Laden der Seite automatisch erfassen.',
        ],
        'spa' => [
            'label' => 'SPA-Modus',
            'helper' => 'Tracking-Modus für Single-Page-Anwendungen. Wählen Sie die Routing-Methode Ihrer Anwendung.',
            'placeholder' => 'Deaktiviert',
        ],
        'honor_dnt' => [
            'label' => 'Do Not Track respektieren',
            'helper' => 'Wenn aktiviert, respektiert Fathom die Do-Not-Track-Einstellung des Browsers.',
        ],
    ],
];
