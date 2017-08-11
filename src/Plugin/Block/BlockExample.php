<?php

namespace Drupal\module_skeleton\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "module_skeleton",
 *   admin_label = @Translation("Module Skeleton"),
 *   category = @Translation("Module Skeleton"),
 * )
 */
class BlockExample extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $configuration = $this->getConfiguration();
    if (!empty($configuration['module_skeleton_name'])) {
      $name = $configuration['module_skeleton_name'];
    }
    else {
      $name = "No one";
    }
    return array(
      '#theme' => "template_example",
      '#name' => $name,
    );
  }

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    $default_config = \Drupal::config('module_skeleton.settings');
    return array(
      'module_skeleton_name' => $default_config->get('hello.name'),
    );
  }

}
