<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Configuración de Fathom Analytics',
    'section_title' => 'Configuración de seguimiento',
    'fields' => [
        'website_id' => [
            'label' => 'ID del sitio web',
            'helper' => 'Tu ID de sitio de Fathom (p. ej., ABCDEFGH). Se encuentra en tu panel de Fathom, en Site Settings.',
        ],
        'canonical' => [
            'label' => 'Usar URL canónica',
            'helper' => 'Si está activado, Fathom usará la URL canónica en lugar de la URL real para el seguimiento.',
        ],
        'auto' => [
            'label' => 'Seguimiento automático',
            'helper' => 'Registra automáticamente las visitas de página al cargar la página.',
        ],
        'spa' => [
            'label' => 'Modo SPA',
            'helper' => 'Modo de seguimiento para aplicaciones de una sola página. Selecciona el método de enrutamiento que usa tu aplicación.',
            'placeholder' => 'Desactivado',
        ],
        'honor_dnt' => [
            'label' => 'Respetar Do Not Track',
            'helper' => 'Si está activado, Fathom respetará la configuración Do Not Track del navegador.',
        ],
    ],
];
