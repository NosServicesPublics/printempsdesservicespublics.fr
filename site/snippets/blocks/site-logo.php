<?php

$isHomePage = $page->isHomePage();
$logoTag = Html::a(
    $site->url(),
    [Html::img($kirby->url("assets") . '/img/20220210_PSP_LOGOTYPE_1.png', [
      'width' => 150,
      'height' => 150,
    ])
    ],
    [
      'class' => 'site-logo' . ($isHomePage ? ' site-logo--home' : ''),
      'aria-current' => $isHomePage ? 'page' : null,
      "tabindex" => $isHomePage ? '-1' : '0',
      'aria-label' => 'Retour à l\'accueil',
    ]
);

echo $logoTag;
