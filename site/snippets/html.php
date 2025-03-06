<!DOCTYPE html>
<html lang="<?php echo $kirby->language(); ?>" class="no-js" data-theme="light">
<?php snippet('head'); ?>

<body>
  <?php snippet('header'); ?>
  <main>
    <div class="main__inner">
      <?php if ($mainContent = $slots->main()) : ?>
        <?php echo $mainContent ?>
      <?php endif ?>
    </div>
  </main>
  <footer class="site-footer">
    <div class="site-footer__inner">
      <?php snippet('layouts', ['layouts' => $site->footer()->toLayouts()]); ?>
    </div>
  </footer>
  <?php echo vite()->js("vite.entry.js");?>
  <?php echo vite()->js('scripts/pages/' . $page->id() . '/index.js', try: true);?>
  <?php snippet('matomo');?>
  <?php snippet('seo/schemas'); ?>
  <?php snippet('debugbar') ?>
</body>

</html>
