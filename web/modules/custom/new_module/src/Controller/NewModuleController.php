<?php declare(strict_types = 1);

namespace Drupal\new_module\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Returns responses for New module routes.
 */
final class NewModuleController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function __invoke(): array {

    $build['content'] = [
      '#type' => 'item',
      '#markup' => $this->t('It works!'),
    ];

    return $build;
  }

}
