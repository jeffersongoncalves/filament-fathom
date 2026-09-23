<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'تنظیمات Fathom Analytics',
    'section_title' => 'پیکربندی ردیابی',
    'fields' => [
        'website_id' => [
            'label' => 'شناسه وب‌سایت',
            'helper' => 'شناسه سایت شما در Fathom (مثلاً ABCDEFGH). در داشبورد Fathom بخش Site Settings قرار دارد.',
        ],
        'canonical' => [
            'label' => 'استفاده از URL متعارف',
            'helper' => 'در صورت فعال بودن، Fathom به جای URL واقعی از URL متعارف (canonical) برای ردیابی استفاده می‌کند.',
        ],
        'auto' => [
            'label' => 'ردیابی خودکار',
            'helper' => 'بازدیدهای صفحه به‌صورت خودکار هنگام بارگذاری صفحه ثبت شوند.',
        ],
        'spa' => [
            'label' => 'حالت SPA',
            'helper' => 'حالت ردیابی برنامه‌های تک‌صفحه‌ای. روش مسیریابی برنامه خود را انتخاب کنید.',
            'placeholder' => 'غیرفعال',
        ],
        'honor_dnt' => [
            'label' => 'رعایت Do Not Track',
            'helper' => 'در صورت فعال بودن، Fathom تنظیم Do Not Track مرورگر را رعایت می‌کند.',
        ],
    ],
];
