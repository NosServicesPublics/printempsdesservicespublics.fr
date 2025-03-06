<?php

require_once __DIR__ . '/models/iframe-block.php';

Kirby::plugin('kirby/iframe', [
  'blueprints' => [
    'blocks/iframe' => __DIR__ . '/blueprints/blocks/iframe.yml'
  ],
  'snippets' => [
    'blocks/iframe' => __DIR__ . '/snippets/blocks/iframe.php'
  ],
  'blockModels' => [
    'iframe' => IframeBlock::class
  ]
]);
