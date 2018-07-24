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

  $tags = [
      ['text' => 'Sonal','weight'=> 13],
      ['text' => 'Sagar','weight'=> 10.5 ,'html' =>['class' => 'vertical']],
      ['text' => 'Sonvir','weight'=> 9.4],
      ['text' => 'Snehal','weight'=> 8, 'html' =>['class' => 'vertical']],
    ];

    return [
      '#theme' => 'block_tagcloud',
      '#attached' => [
        'library' => ['tagcloud/tagcloud'],
        'drupalSettings' =>[
          'tags' => $tags
        ]
      ]
    ];

  }

}
