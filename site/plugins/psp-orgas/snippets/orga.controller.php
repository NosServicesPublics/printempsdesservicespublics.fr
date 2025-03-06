<?php

return function ($name, $site) {

  $orga = collection('orgas')->findBy('name', $name);
  if (!$orga) {
    return null;
  }

  $attrs = [
    'class' => 'card',
  ];

  $linkAttrs = [
    'href' => $orga->url(),
    'target' => '_blank',
    'class' => 'psp-organisations-card',
  ];

  $logo = $orga->logo()->toFile();

  return compact([
    'attrs',
    'linkAttrs',
    'logo',
  ]);
};
