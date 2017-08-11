<?php

namespace Drupal\module_skeleton\Controller;

use Drupal\Core\Controller\ControllerBase;

class SkeletonController extends ControllerBase {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => $this->t('Hello, World!'),
    );
  }

}
