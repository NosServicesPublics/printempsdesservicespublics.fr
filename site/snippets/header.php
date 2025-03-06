<header class="site-header">
  <div class="site-header__inner">
    <?php // echo $logoTag; ?>
    <?php if (false) { ?>
    <a <?php echo $navTogglerAttrs ?>>
      <span class="nav-toggler__closed">
      <?php echo $menuIconClosed; ?>
      </span>
      <span class="nav-toggler__open">
      <?php echo $menuIconOpen; ?>
      </span>
    </a>
      <?php snippet('navigation-menu', ['key' => 'primary']); ?>
    <?php } ?>
      <?php snippet('blocks/navigation-menu-definer', ['block' => $site->content()->header()->toBlocks()->first()]); ?>
  </div>
</header>
