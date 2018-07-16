<?php

namespace Drupal\tagcloud\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "tag_block",
 *   admin_label = @Translation("Tag block"),
 *   category = @Translation("Tag Block"),
 * )
 */
class TagBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {


  // $build['#attached']['drupalSettings']['mytags'] = $mytags;

    return [
      '#theme' => 'block__tagcloud',
      '#' => $some_variable,
      '#attached' => array(
        'library' => array(
          'tagcloud/jqcloud',
          'tagcloud/default',
        ),
      ),
    ];

  }

}
