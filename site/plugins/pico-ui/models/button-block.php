<?php

use Kirby\Cms\Block;

class ButtonBlock extends Block
{
  public function label(): string
  {
    return $this->content()->label()->escape();
  }

  public function attrs(): array
  {
    return [
      'href' => $this->content()->link()->toUrl(),
      'class' => $this->cssClasses(),
      'role' => 'button',
      'aria-label' => $this->label(),
      'target' => $this->content()->target()->toBool() ? '_blank' : null,
      'rel' => $this->content()->target()->toBool() ? 'noopener noreferrer' : null,
    ];
  }

  public function cssClasses(): string
  {
    $classes = ['button'];
    $classes[] = $this->style()->value();
    return implode(' ', $classes);
  }
}
