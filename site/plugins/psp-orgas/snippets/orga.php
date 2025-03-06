<?php if (isset($attrs)) : ?>
<a <?php echo attr($linkAttrs); ?>>
  <article <?php echo attr($attrs); ?>>
  <?php if (isset($logo)) : ?>
    <header class="psp-organisations-card__logo">
      <figure>
    <?php echo $logo; ?>
      </figure>
    </header>
  <?php endif ?>
  <?php if (isset($name)) : ?>
    <div class="card-content">
      <figcaption class="psp-organisations-card__name">
    <?php echo $name; ?>
      </figcaption>
    </div>
  <?php endif ?>
  </article>
</a>
<?php endif ?>
