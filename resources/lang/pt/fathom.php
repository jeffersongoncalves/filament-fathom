<?php

return [
    'navigation_group' => 'Definições',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Definições do Fathom Analytics',
    'section_title' => 'Configuração de rastreamento',
    'fields' => [
        'website_id' => [
            'label' => 'ID do site',
            'helper' => 'O ID do seu site no Fathom (por ex., ABCDEFGH). Encontra-se no painel do Fathom, em Site Settings.',
        ],
        'canonical' => [
            'label' => 'Usar URL canónico',
            'helper' => 'Quando ativado, o Fathom usará o URL canónico em vez do URL real para o rastreamento.',
        ],
        'auto' => [
            'label' => 'Rastreamento automático',
            'helper' => 'Registar automaticamente as visualizações de página ao carregar a página.',
        ],
        'spa' => [
            'label' => 'Modo SPA',
            'helper' => 'Modo de rastreamento para aplicações de página única. Selecione o método de encaminhamento usado pela sua aplicação.',
            'placeholder' => 'Desativado',
        ],
        'honor_dnt' => [
            'label' => 'Respeitar Do Not Track',
            'helper' => 'Quando ativado, o Fathom respeitará a definição Do Not Track do navegador.',
        ],
    ],
];
