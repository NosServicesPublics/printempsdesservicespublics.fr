<?php snippet('html', slots: true) ?>
  <?php slot('main') ?>
    <?php snippet('layouts', ['layouts' => $page->layout()->toLayouts()]); ?>
  <?php endslot() ?>
<?php endsnippet();
