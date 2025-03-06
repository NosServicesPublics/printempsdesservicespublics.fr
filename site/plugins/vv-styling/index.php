<?php

use Kirby\Content\Content;

Kirby::plugin('shallowred/kirby-spacings', [
  'blueprints' => [
    'blocks/spacing' => __DIR__ . '/blueprints/blocks/spacing.yml',
  ],
  'snippets' => [
    'blocks/spacing' => __DIR__ . '/snippets/blocks/spacing.php',
  ],
]);
