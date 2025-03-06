<?php

use Kirby\Cms\Block;

class AccordionBlock extends Block
{
  public function detailsAttrs(): array
  {
    $attrs = [
      'open' => $this->toggle()->bool()
    ];
    return $attrs;
  }

  public function summaryAttrs(): array
  {
    $attrs = [];

    if ($this->isButton()->bool()) {
      $attrs['role'] = 'button';
    }

    $attrs['class'] = $this->buttonClasses();

    return $attrs;
  }

  public function buttonClasses(): string
  {
    $classes = [];

    if ($this->isButton()->bool()) {
      if ($this->buttonStyle()->isNotEmpty()) {
        $classes[] = $this->buttonStyle();
      }
    }

    return implode(' ', $classes);
  }
}
