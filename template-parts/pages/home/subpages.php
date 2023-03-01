<?php
$parent_id = get_the_ID(); // Get the ID of the current page or post as the parent ID.
$args = array(
	'post_parent'    => $parent_id,
	'post_type'      => 'page', // Change 'page' to the post type of your child pages.
	'orderby'        => 'menu_order', // Order child pages by menu order.
	'order'          => 'ASC', // Sort child pages in ascending order.
	'posts_per_page' => -1, // Show all child pages.
	'exclude'        => array( $parent_id ),
);
$children = get_children( $args ); // Get an array of child pages.
if ( $children ) :
	foreach ( $children as $child ) :
		$featured_image = get_the_post_thumbnail_url( $child->ID, 'medium' ); // Get the featured image URL for each child page.
		$title = get_the_title( $child->ID ); // Get the title for each child page.
		$link = get_permalink( $child->ID ); // Get the link URL for each child page.
		?>
		<div class="child-page">
			<a href="<?php echo $link; ?>">
				<img src="<?php echo $featured_image; ?>" alt="<?php echo $title; ?>">
				<h3><?php echo $title; ?></h3>
			</a>
		</div>
		<?php
	endforeach;
endif;