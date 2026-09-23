<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'Fathom Analytics',
    'title' => 'Fathom Analytics 設定',
    'section_title' => 'トラッキング設定',
    'fields' => [
        'website_id' => [
            'label' => 'ウェブサイト ID',
            'helper' => 'Fathom のサイト ID（例: ABCDEFGH）。Fathom ダッシュボードの Site Settings で確認できます。',
        ],
        'canonical' => [
            'label' => '正規 URL を使用',
            'helper' => '有効にすると、Fathom は実際の URL の代わりに正規 URL を使用してトラッキングします。',
        ],
        'auto' => [
            'label' => '自動トラッキング',
            'helper' => 'ページ読み込み時にページビューを自動的に記録します。',
        ],
        'spa' => [
            'label' => 'SPA モード',
            'helper' => 'シングルページアプリケーション用のトラッキングモード。アプリケーションが使用するルーティング方式を選択してください。',
            'placeholder' => '無効',
        ],
        'honor_dnt' => [
            'label' => 'Do Not Track を尊重',
            'helper' => '有効にすると、Fathom はブラウザの Do Not Track 設定を尊重します。',
        ],
    ],
];
