<?php

require __DIR__ . '/vendor/autoload.php';

use Shallowred\KirbySharedConfig\Config;

return Config::withSharedConfig(__DIR__, [
  'url' => [
    'https://printempsdesservicespublics.fr',
    'https://psp.lucaspoulain.com',
    'https://psp.test',
  ],
]);
