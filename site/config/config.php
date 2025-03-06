<?php

/** phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols */

use Kirby\Uuid\Uuid;

return [
  'languages' => true,
  'languages.detect' => true,

  'smartypants' => true,
  'tobimori.seo' => [
    'canonicalBase' => 'https://printempsdesservicespublics.fr',
    'lang' => 'fr_FR',
    'sitemap' => [
      // 'excludeTemplates' => [],
    ],
  ],
  'shallowred.html-sitemap.ignore' => [
    "error",
  ],
  'shallowred.navigation-menus' => [
    'declared-navigation-menus' => [
      'primary' => [
        'name' => 'primaryNavigation',
        'label' => 'Menu de navigation principal',
      ],
      'secondary' => [
        'name' => 'secondaryNavigation',
        'label' => 'Menu de navigation secondaire',
      ],
    ]
  ],

  'timnarr.imagex' => [
    'cache' => true,
    'customLazyloading' => false,
    'formats' => ['avif', 'webp'],
    'includeInitialFormat' => false,
    'noSrcsetInImg' => false,
    'relativeUrls' => false,
  ],

  'thumbs' => [
    'srcsets' => [
      'default' => [
        '400w'  => ['width' =>  400, 'crop' => true, 'quality' => 80],
        '800w'  => ['width' =>  800, 'crop' => true, 'quality' => 80],
        '1200w' => ['width' => 1200, 'crop' => true, 'quality' => 80],
      ],
      'default-webp' => [
        '400w'  => ['width' =>  400, 'crop' => true, 'quality' => 75, 'format' => 'webp', 'sharpen' => 10],
        '800w'  => ['width' =>  800, 'crop' => true, 'quality' => 75, 'format' => 'webp', 'sharpen' => 10],
        '1200w' => ['width' => 1200, 'crop' => true, 'quality' => 75, 'format' => 'webp', 'sharpen' => 10],
      ],
      'default-avif' => [
        '400w'  => ['width' =>  400, 'crop' => true, 'quality' => 65, 'format' => 'avif', 'sharpen' => 25],
        '800w'  => ['width' =>  800, 'crop' => true, 'quality' => 65, 'format' => 'avif', 'sharpen' => 25],
        '1200w' => ['width' => 1200, 'crop' => true, 'quality' => 65, 'format' => 'avif', 'sharpen' => 25],
      ],
    ],
  ],

  'routes' => [
    [
      'pattern' => 'menu',
      'action'  => function () {
          return Page::factory([
            'slug' => 'static-menu',
            'template' => 'static-menu',
            'model' => 'static-menu',
            'content' => [
              'title' => 'Menu statique',
              'uuid'  => Uuid::generate(),
            ]
          ]);
      }
    ]
  ],

  "afbora.kirby-minify-html" => [
    "enabled" => true,
    "options" => [
      "doRemoveOmittedQuotes" => false,
      "doRemoveOmittedHtmlTags" => false
    ]
  ],

  'ready' => function () {
    return [
      'sylvainjule.matomo' => option('secrets.sylvainjule.matomo'),
      'tobimori.dreamform' => option('secrets.tobimori.dreamform'),

      'cache' => [
        'pages' => [
          'active'  => false,
        ]
      ],
    ];
  },

];
