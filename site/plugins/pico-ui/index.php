<?php

require_once __DIR__ . '/models/button-block.php';
require_once __DIR__ . '/models/accordion-block.php';
require_once __DIR__ . '/models/card-block.php';
// require_once __DIR__ . '/models/nav-block.php';
// require_once __DIR__ . '/models/modal-block.php';
// require_once __DIR__ . '/models/progress-block.php';
// require_once __DIR__ . '/models/dropdown-block.php';

Kirby::plugin('shallowred/pico-ui', [

  'blueprints' => [
    'blocks/button' => __DIR__ . '/blueprints/blocks/button.yml',
    'blocks/accordion' => __DIR__ . '/blueprints/blocks/accordion.yml',
    'blocks/button-group' => __DIR__ . '/blueprints/blocks/button-group.yml',
    'blocks/card' => __DIR__ . '/blueprints/blocks/card.yml',
    // 'blocks/nav' => __DIR__ . '/blueprints/blocks/nav.yml',
    // 'fields/nav-items' => __DIR__ . '/blueprints/fields/nav-items.yml',
    // 'blocks/modal' => __DIR__ . '/blueprints/blocks/modal.yml',
    // 'blocks/progress' => __DIR__ . '/blueprints/blocks/progress.yml',
    // 'blocks/dropdown' => __DIR__ . '/blueprints/blocks/dropdown.yml',
  ],

  'snippets' => [
    'blocks/button' => __DIR__ . '/snippets/blocks/button.php',
    'blocks/accordion' => __DIR__ . '/snippets/blocks/accordion.php',
    'blocks/button-group' => __DIR__ . '/snippets/blocks/button-group.php',
    'blocks/card' => __DIR__ . '/snippets/blocks/card.php',
    // 'blocks/nav' => __DIR__ . '/snippets/blocks/nav.php',
    // 'nav-items/dropdown' => __DIR__ . '/snippets/nav-items/dropdown.php',
    // 'nav-items/link' => __DIR__ . '/snippets/nav-items/link.php',
    // 'nav-items/link.controller' => __DIR__ . '/snippets/nav-items/link.controller.php',
    // 'nav-items/button' => __DIR__ . '/snippets/nav-items/button.php',
    // 'nav-items/button.controller' => __DIR__ . '/snippets/nav-items/button.controller.php',
    // 'blocks/modal' => __DIR__ . '/snippets/blocks/modal.php',
    // 'blocks/progress' => __DIR__ . '/snippets/blocks/progress.php',
    // 'blocks/dropdown' => __DIR__ . '/snippets/blocks/dropdown.php',
  ],

  'blockModels' => [
    'button' => ButtonBlock::class,
    'accordion' => AccordionBlock::class,
    'card' => CardBlock::class,
    // 'nav' => NavBlock::class,
    // 'modal' => ModalBlock::class,
    // 'progress' => ProgressBlock::class,
    // 'dropdown' => DropdownBlock::class,
  ],
]);
