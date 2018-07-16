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
      0 => ['text' => 'Lorem','weight'=> 13],
      1 => ['text' => 'Ipsum','weight'=> 10.5 ,'html' =>['class' => 'vertical']],
      2 => ['text' => 'good day','weight'=> 9.4],
      3 => ['text' => 'Good morning','weight'=> 8, 'html' =>['class' => 'vertical']],
    ];

    return [
      '#theme' => 'block_tagcloud',
      '#custom_tags' => $tags,
      '#attached' => [
        'library' => ['tagcloud/tagcloud'],
        'drupalSettings' =>[
          'tags' => $tags
        ]
      ]
    ];

  }

}
