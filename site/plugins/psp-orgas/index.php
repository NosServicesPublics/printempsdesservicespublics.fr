<?php

Kirby::plugin('psp/orgas', [

  'collections' => [
    'orgas' => function () {
      return site()->content()->orgas()->toStructure();
    },
  ],

  'blueprints' => [
    'fields/orgas' => __DIR__ . '/blueprints/fields/orgas.yml',
    'blocks/orgas' => __DIR__ . '/blueprints/blocks/orgas.yml',
  ],

  'snippets' => [
    'blocks/orgas' => __DIR__ . '/snippets/blocks/orgas.php',
    'orga' => __DIR__ . '/snippets/orga.php',
    'orga.controller' => __DIR__ . '/snippets/orga.controller.php',
  ],
]);
