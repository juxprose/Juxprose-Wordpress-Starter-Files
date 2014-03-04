<?php
/**
 * Flexslider with ACF
 *
 * @package Juxprose One Sixty
 */
 
$images = get_field('gallery');
 
if( $images ): ?>
  <div id="slider" class="flexslider">
    <ul class="slides">
      <?php foreach( $images as $image ): ?>
        <li>
          <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
          <p><?php echo $image['caption']; ?></p>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>