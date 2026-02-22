<?php

return [
    'navigation_group' => 'Settings',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics Settings',
    'section_title' => 'Tracking Configuration',

    'fields' => [
        'website_id' => [
            'label' => 'Website ID',
            'helper' => 'Your Fathom site ID (e.g. ABCDEFGH). Found in your Fathom dashboard under Site Settings.',
        ],
        'canonical' => [
            'label' => 'Use Canonical URL',
            'helper' => 'When enabled, Fathom will use the canonical URL instead of the actual URL for tracking.',
        ],
        'auto' => [
            'label' => 'Auto Tracking',
            'helper' => 'Automatically track page views on page load.',
        ],
        'spa' => [
            'label' => 'SPA Mode',
            'helper' => 'Single Page Application tracking mode. Select the routing method your application uses.',
            'placeholder' => 'Disabled',
        ],
        'honor_dnt' => [
            'label' => 'Honor Do Not Track',
            'helper' => 'When enabled, Fathom will respect the browser Do Not Track setting.',
        ],
    ],
];
