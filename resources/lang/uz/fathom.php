<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics sozlamalari',
    'section_title' => 'Kuzatuv konfiguratsiyasi',
    'fields' => [
        'website_id' => [
            'label' => 'Veb-sayt ID',
            'helper' => 'Fathom sayt ID raqamingiz (masalan, ABCDEFGH). Fathom panelida Site Settings boʻlimida joylashgan.',
        ],
        'canonical' => [
            'label' => 'Kanonik URLʼdan foydalanish',
            'helper' => 'Yoqilganda Fathom kuzatuv uchun haqiqiy URL oʻrniga kanonik URLʼdan foydalanadi.',
        ],
        'auto' => [
            'label' => 'Avtomatik kuzatuv',
            'helper' => 'Sahifa yuklanganda sahifa koʻrishlarini avtomatik kuzatish.',
        ],
        'spa' => [
            'label' => 'SPA rejimi',
            'helper' => 'Bir sahifali ilova kuzatuv rejimi. Ilovangiz foydalanadigan marshrutlash usulini tanlang.',
            'placeholder' => 'Oʻchirilgan',
        ],
        'honor_dnt' => [
            'label' => 'Do Not Trackʼni hurmat qilish',
            'helper' => 'Yoqilganda Fathom brauzerning Do Not Track sozlamasini hurmat qiladi.',
        ],
    ],
];
