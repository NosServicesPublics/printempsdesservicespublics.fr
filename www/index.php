<?php

// phpcs:disable PSR1.Files.SideEffects.FoundWithSymbols

define('KIRBY_HELPER_DUMP', false);

$kirbyConfig = include __DIR__ . '/../kirby.config.php';

$kirby = new Kirby($kirbyConfig);

echo $kirby->render();
