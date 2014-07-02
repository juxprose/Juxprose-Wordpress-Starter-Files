<?php // Sub Page menu
// --------------------------------------------------
if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
if ($children) { ?>
  <nav class="menu-subpage">
  	<h2><?php $parent_title = get_the_title($post->post_parent); echo $parent_title; ?></h2>
    <ul>
      <?php echo $children; ?>
    </ul>
  </nav>
<?php } ?>