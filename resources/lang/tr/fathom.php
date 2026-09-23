<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics ayarları',
    'section_title' => 'İzleme yapılandırması',
    'fields' => [
        'website_id' => [
            'label' => 'Web sitesi kimliği',
            'helper' => 'Fathom site kimliğiniz (ör. ABCDEFGH). Fathom panelinizde Site Settings altında bulunur.',
        ],
        'canonical' => [
            'label' => 'Kanonik URL kullan',
            'helper' => 'Etkinleştirildiğinde Fathom, izleme için gerçek URL yerine kanonik URL\'yi kullanır.',
        ],
        'auto' => [
            'label' => 'Otomatik izleme',
            'helper' => 'Sayfa yüklendiğinde sayfa görüntülemelerini otomatik olarak izleyin.',
        ],
        'spa' => [
            'label' => 'SPA modu',
            'helper' => 'Tek sayfalık uygulama izleme modu. Uygulamanızın kullandığı yönlendirme yöntemini seçin.',
            'placeholder' => 'Devre dışı',
        ],
        'honor_dnt' => [
            'label' => 'Do Not Track\'e uy',
            'helper' => 'Etkinleştirildiğinde Fathom, tarayıcının Do Not Track ayarına uyar.',
        ],
    ],
];
