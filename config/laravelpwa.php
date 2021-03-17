'manifest' => [
        'name' => env('APP_NAME', 'My PWA App'),
        'short_name' => 'PWA',
        'start_url' => '/',
        'background_color' => '#ffffff',
        'theme_color' => '#000000',
        'display' => 'standalone',
        'orientation' => 'any',
        'status_bar' => 'black',
        'icons' => [
            '180x180' => [
                'path' => '/images/icons/apple-icon-180.png',
                'purpose' => 'any'
            ],
        ],
        'splash' => [
            '640x1136' => '/images/icons/apple-splash-640-1136.jpg',
            '750x1334' => '/images/icons/apple-splash-750-1334.jpg',
            '828x1792' => '/images/icons/apple-splash-828-1792.jpg',
            '1125x2436' => '/images/icons/apple-splash-1125-2436.jpg',
            '1242x2208' => '/images/icons/apple-splash-1242-2208.jpg',
            '1242x2688' => '/images/icons/apple-splash-1242-2688.jpg',
			'1284X2778' => '/images/icons/apple-splash-1284-2778.jpg',
            '1536x2048' => '/images/icons/apple-splash-1536-2048.jpg',
            '1668x2224' => '/images/icons/apple-splash-1668-2224.jpg',
            '1668x2388' => '/images/icons/apple-splash-1668-2388.jpg',
            '2048x2732' => '/images/icons/apple-splash-2048-2732.jpg',
        ],
        'shortcuts' => [
            [
                'name' => 'Shortcut Link 1',
                'description' => 'Shortcut Link 1 Description',
                'url' => '/shortcutlink1',
                'icons' => [
                    "src" => "/images/icons/icon-72x72.png",
                    "purpose" => "any"
                ]
            ],
            [
                'name' => 'Shortcut Link 2',
                'description' => 'Shortcut Link 2 Description',
                'url' => '/shortcutlink2'
            ]
        ],
        'custom' => []
    ]