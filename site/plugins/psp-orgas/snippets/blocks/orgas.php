<section class="psp-organisations-cards-container">
  <?php foreach ($block->orgas()->split() as $orgaName) : ?>
    <?php snippet('orga', ['name' => $orgaName]); ?>
  <?php endforeach ?>
</section>
