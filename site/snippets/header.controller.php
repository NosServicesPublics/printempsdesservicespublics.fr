<?php

use Kirby\Http\Params;

return function ($page, $site, $kirby, $from) {
  $isHomePage = $page->isHomePage();
  $logoTag = Html::a(
      $site->url(),
      [Html::img($kirby->url("assets") . '/img/20220210_PSP_LOGOTYPE_1.png')],
      [
        'class' => 'site-logo',
        'aria-current' => $isHomePage ? 'page' : null,
        "tabindex" => $isHomePage ? '-1' : '0',
        'aria-label' => 'Retour à l\'accueil',
      ]
  );

  $menuIconClosed = 'open';
  // $menuIconClosed = svg('assets/menu-menu.svg');
  // $menuIconOpen = "<div class='i-ri-close-fill'></div>";
  $menuIconOpen = "close";

  if (isset($from)) {
    $menuHref = $from;
  } else {
    $params = new Params([
      'from' => $page->url(),
    ]);
    $menuHref = '/menu/' . $params->toString();
  }

  $navTogglerAttrs = attr([
    'href' => $menuHref,
    'id' => 'nav-toggler',
    'aria-label' => 'Ouvrir le menu de navigation',
    'aria-haspopup' => 'true',
    'aria-controls' => 'main-nav',
    'tabindex' => '0',
  ]);

  return compact([
    'menuHref',
    'navTogglerAttrs',
    'isHomePage',
    'logoTag',
    'menuIconClosed',
    'menuIconOpen',
  ]);
};
