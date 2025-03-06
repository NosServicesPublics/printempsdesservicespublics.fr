<div role="group" class="button-group">
  <?php foreach ($block->content()->buttons()->toBlocks() as $button) : ?>
    <?php echo $button; ?>
  <?php endforeach;?>
</div>
