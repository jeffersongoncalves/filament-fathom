<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Paramètres de Fathom Analytics',
    'section_title' => 'Configuration du suivi',
    'fields' => [
        'website_id' => [
            'label' => 'ID du site',
            'helper' => 'Votre ID de site Fathom (par ex. ABCDEFGH). Disponible dans votre tableau de bord Fathom, sous Site Settings.',
        ],
        'canonical' => [
            'label' => 'Utiliser l\'URL canonique',
            'helper' => 'Si activé, Fathom utilisera l\'URL canonique au lieu de l\'URL réelle pour le suivi.',
        ],
        'auto' => [
            'label' => 'Suivi automatique',
            'helper' => 'Suivre automatiquement les pages vues au chargement de la page.',
        ],
        'spa' => [
            'label' => 'Mode SPA',
            'helper' => 'Mode de suivi pour application monopage. Sélectionnez la méthode de routage utilisée par votre application.',
            'placeholder' => 'Désactivé',
        ],
        'honor_dnt' => [
            'label' => 'Respecter Do Not Track',
            'helper' => 'Si activé, Fathom respectera le paramètre Do Not Track du navigateur.',
        ],
    ],
];
