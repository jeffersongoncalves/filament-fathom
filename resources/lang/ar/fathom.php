<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'إعدادات Fathom Analytics',
    'section_title' => 'إعدادات التتبع',
    'fields' => [
        'website_id' => [
            'label' => 'معرّف الموقع',
            'helper' => 'معرّف موقعك في Fathom (مثل ABCDEFGH). تجده في لوحة تحكم Fathom ضمن إعدادات الموقع.',
        ],
        'canonical' => [
            'label' => 'استخدام الرابط الأساسي',
            'helper' => 'عند التفعيل، سيستخدم Fathom الرابط الأساسي (canonical) بدلًا من الرابط الفعلي للتتبع.',
        ],
        'auto' => [
            'label' => 'التتبع التلقائي',
            'helper' => 'تتبع مشاهدات الصفحات تلقائيًا عند تحميل الصفحة.',
        ],
        'spa' => [
            'label' => 'وضع SPA',
            'helper' => 'وضع تتبع تطبيقات الصفحة الواحدة. اختر طريقة التوجيه التي يستخدمها تطبيقك.',
            'placeholder' => 'معطّل',
        ],
        'honor_dnt' => [
            'label' => 'احترام عدم التتبع',
            'helper' => 'عند التفعيل، سيحترم Fathom إعداد عدم التتبع (Do Not Track) في المتصفح.',
        ],
    ],
];
