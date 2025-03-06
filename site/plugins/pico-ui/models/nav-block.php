<?php

class NavBlock extends \Kirby\Cms\Block
{
  public function isBreadcrumb(): bool
  {
    return $this->content()->breadcrumb()->toBool();
  }

  public function layout(): string
  {
    return $this->isBreadcrumb() ? 'horizontal' : $this->content()->layout()->or('vertical');
  }

  public function wrapper(): string
  {
    return $this->layout() === 'vertical' ? 'aside' : 'div';
  }

  public function navAttrs(): array
  {
    $attrs = [];

    if ($this->isBreadcrumb()) {
      $attrs['aria-label'] = 'breadcrumb';
    }

    return $attrs;
  }
}
