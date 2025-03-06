<?php

class CardBlock extends \Kirby\Cms\Block
{
  public function imageAttrs(): array
  {
    return [
      'src' => $this->image()->toFile()->url(),
      'alt' => $this->image()->toFile()->alt(),
    ];
  }
}
