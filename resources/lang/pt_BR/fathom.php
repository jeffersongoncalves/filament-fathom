<?php

return [
    'navigation_group' => 'Configurações',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Configurações do Fathom Analytics',
    'section_title' => 'Configuração de Rastreamento',

    'fields' => [
        'website_id' => [
            'label' => 'ID do Site',
            'helper' => 'Seu ID do site no Fathom (ex: ABCDEFGH). Encontrado no painel do Fathom em Configurações do Site.',
        ],
        'canonical' => [
            'label' => 'Usar URL Canônica',
            'helper' => 'Quando ativado, o Fathom usará a URL canônica em vez da URL real para rastreamento.',
        ],
        'auto' => [
            'label' => 'Rastreamento Automático',
            'helper' => 'Rastrear visualizações de página automaticamente ao carregar a página.',
        ],
        'spa' => [
            'label' => 'Modo SPA',
            'helper' => 'Modo de rastreamento para Single Page Application. Selecione o método de roteamento que sua aplicação utiliza.',
            'placeholder' => 'Desativado',
        ],
        'honor_dnt' => [
            'label' => 'Respeitar Do Not Track',
            'helper' => 'Quando ativado, o Fathom respeitará a configuração Do Not Track do navegador.',
        ],
    ],
];
