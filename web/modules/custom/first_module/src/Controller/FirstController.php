<?php

namespace Drupal\first_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class FirstController extends ControllerBase
{

  public function first()
  {

    $p = [
      '#type' => 'html_tag',
      '#tag' => 'p',
      '#value' => $this->t('This is the first module'),
    ];
    return $p;
  }
}
