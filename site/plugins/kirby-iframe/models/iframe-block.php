<?php

use Kirby\Cms\Block;

class IframeBlock extends Block
{
  public function url(): string
  {
    return $this->content()->url()->value();
  }

  public function width(): string
  {
    return $this->content()->width()->or('100%')->value();
  }

  public function height(): string
  {
    return $this->content()->height()->or('400px')->value();
  }

  public function title(): string
  {
    return $this->content()->title()->or('Contenu embarqué')->value();
  }

  public function useResizer(): bool
  {
    return $this->content()->useResizer()->toBool();
  }

  public function attrs(): array
  {
    return [
      'src' => $this->url(),
      'width' => $this->width(),
      'height' => $this->height(),
      'title' => $this->title(),
      'loading' => 'lazy',
      'frameborder' => "0",
      'allowfullscreen' => true,
    ];
  }
}
