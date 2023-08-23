<?php

namespace Drupal\second_module\Controller;

use Drupal\Core\Controller\ControllerBase;

class SecondController extends ControllerBase
{

  public function button()
  {
    $button = [
      '#type' => 'html_tag',
      '#tag' => 'button',
      '#value' => $this->t('Click me'),
      '#attributes' => [
        'id' => 'my-button',
        'onclick' => $this->sayWelcome(),
      ]
    ];

    return $button;
  }
  public function sayWelcome()
  {
    return "alert('Welcome!')";
  }
}
