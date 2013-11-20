<?php // Featured Image
// ------------------------
$attachment_id = get_field('featured_image');
$size = "large";
$image = wp_get_attachment_image_src( $attachment_id, $size ); ?>
<img src="<?php echo $image[0]; ?>" />