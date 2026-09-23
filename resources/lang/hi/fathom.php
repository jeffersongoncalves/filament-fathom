<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics सेटिंग्स',
    'section_title' => 'ट्रैकिंग कॉन्फ़िगरेशन',
    'fields' => [
        'website_id' => [
            'label' => 'वेबसाइट ID',
            'helper' => 'आपकी Fathom साइट ID (जैसे ABCDEFGH)। यह आपके Fathom डैशबोर्ड में Site Settings के अंतर्गत मिलती है।',
        ],
        'canonical' => [
            'label' => 'कैनोनिकल URL का उपयोग करें',
            'helper' => 'सक्षम होने पर, Fathom ट्रैकिंग के लिए वास्तविक URL के बजाय कैनोनिकल URL का उपयोग करेगा।',
        ],
        'auto' => [
            'label' => 'स्वचालित ट्रैकिंग',
            'helper' => 'पेज लोड होने पर पेज व्यू को स्वचालित रूप से ट्रैक करें।',
        ],
        'spa' => [
            'label' => 'SPA मोड',
            'helper' => 'सिंगल पेज एप्लिकेशन ट्रैकिंग मोड। अपने एप्लिकेशन द्वारा उपयोग की जाने वाली रूटिंग विधि चुनें।',
            'placeholder' => 'अक्षम',
        ],
        'honor_dnt' => [
            'label' => 'Do Not Track का सम्मान करें',
            'helper' => 'सक्षम होने पर, Fathom ब्राउज़र की Do Not Track सेटिंग का सम्मान करेगा।',
        ],
    ],
];
