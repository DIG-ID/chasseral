<?php
if ( $post->post_parent ) :
	$ancestors = get_post_ancestors( $post->ID );
	$root      = count( $ancestors ) - 1;
	$cparent   = $ancestors[ $root ];
else :
	$cparent = $post->ID;
endif;

$cargs = array(
	'post_parent'    => $cparent,
	'post_type'      => 'page', // Change 'page' to the post type of your child pages.
	'orderby'        => 'menu_order', // Order child pages by menu order.
	'order'          => 'ASC', // Sort child pages in ascending order.
	'posts_per_page' => -1, // Show all child pages.
);

has_post_parent() ? $cargs['exclude'] = get_the_ID() : '';

$children = get_children( $cargs ); // Get an array of child pages.
if ( $children ) :
	foreach ( $children as $child ) :
		$cfeatured_image = get_the_post_thumbnail_url( $child->ID, 'medium' ); // Get the featured image URL for each child page.
		$ctitle          = get_the_title( $child->ID ); // Get the title for each child page.
		$clink           = get_permalink( $child->ID ); // Get the link URL for each child page.
		?>
		<div class="child-page">
			<a href="<?php echo $clink; ?>">
				<img src="<?php echo $cfeatured_image; ?>" alt="<?php echo $ctitle; ?>">
				<h3><?php echo $ctitle; ?></h3>
			</a>
		</div>
		<?php
	endforeach;
endif;
