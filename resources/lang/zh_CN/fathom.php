<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics 设置',
    'section_title' => '跟踪配置',
    'fields' => [
        'website_id' => [
            'label' => '网站 ID',
            'helper' => '你的 Fathom 站点 ID（例如 ABCDEFGH），可在 Fathom 控制台的 Site Settings 中找到。',
        ],
        'canonical' => [
            'label' => '使用规范 URL',
            'helper' => '启用后，Fathom 将使用规范 URL 而不是实际 URL 进行跟踪。',
        ],
        'auto' => [
            'label' => '自动跟踪',
            'helper' => '在页面加载时自动跟踪页面浏览量。',
        ],
        'spa' => [
            'label' => 'SPA 模式',
            'helper' => '单页应用跟踪模式。请选择应用所使用的路由方式。',
            'placeholder' => '已禁用',
        ],
        'honor_dnt' => [
            'label' => '遵循请勿跟踪',
            'helper' => '启用后，Fathom 将遵循浏览器的请勿跟踪（Do Not Track）设置。',
        ],
    ],
];
