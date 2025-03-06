<article class="card">
  <?php if ($block->image()->isNotEmpty()) : ?>
    <img <?php echo attr($block->imageAttrs()) ?>>
  <?php endif ?>
  
  <?php if ($block->content()->title()->isNotEmpty()) : ?>
    <header>
    <?php echo $block->content()->title()->toBlocks() ?>
    </header>
  <?php endif ?>
  
  <?php if ($block->content()->content()->isNotEmpty()) : ?>
    <div class="card-content">
    <?php echo $block->content()->content()->toBlocks() ?>
    </div>
  <?php endif ?>
  
  <?php if ($block->content()->footer()->isNotEmpty()) : ?>
    <footer>
    <?php echo $block->content()->footer()->kt() ?>
    </footer>
  <?php endif ?>
</article>
