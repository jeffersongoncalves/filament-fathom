<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Impostazioni di Fathom Analytics',
    'section_title' => 'Configurazione del tracciamento',
    'fields' => [
        'website_id' => [
            'label' => 'ID del sito',
            'helper' => 'L\'ID del tuo sito Fathom (ad es. ABCDEFGH). Si trova nella dashboard di Fathom, in Site Settings.',
        ],
        'canonical' => [
            'label' => 'Usa URL canonico',
            'helper' => 'Se abilitato, Fathom utilizzerà l\'URL canonico invece dell\'URL effettivo per il tracciamento.',
        ],
        'auto' => [
            'label' => 'Tracciamento automatico',
            'helper' => 'Traccia automaticamente le visualizzazioni di pagina al caricamento.',
        ],
        'spa' => [
            'label' => 'Modalità SPA',
            'helper' => 'Modalità di tracciamento per applicazioni a pagina singola. Seleziona il metodo di routing usato dalla tua applicazione.',
            'placeholder' => 'Disabilitato',
        ],
        'honor_dnt' => [
            'label' => 'Rispetta Do Not Track',
            'helper' => 'Se abilitato, Fathom rispetterà l\'impostazione Do Not Track del browser.',
        ],
    ],
];
