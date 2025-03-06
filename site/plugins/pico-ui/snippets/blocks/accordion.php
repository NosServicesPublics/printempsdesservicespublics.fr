<details <?php echo attr($block->detailsAttrs()) ?>>
  <?php if ($block->summary()->isNotEmpty()) : ?>
    <summary <?php echo attr($block->summaryAttrs()) ?>>
    <?php echo $block->summary() ?>
    </summary>
  <?php endif ?>
  <?php echo $block->details()->toBlocks() ?>
</details>
