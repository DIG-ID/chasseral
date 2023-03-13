<?php
add_action( 'wp_ajax_get_blog_posts', 'get_blog_posts' );
add_action( 'wp_ajax_nopriv_get_blog_posts', 'get_blog_posts' );

function get_blog_posts() {
	if ( isset( $_POST['page'] ) ) :
		$paged = $_POST['page'];
		$posts_per_page = $_POST['posts_per_page'];

		$blog_query_args = array(
			'post_type'        => 'post',
			'category__not_in' => array( get_cat_ID( 'uncategorized' ) ),
			'hide_empty'       => true,
			'posts_per_page'   => $posts_per_page,
			'paged'            => $paged,
		);

		$blog_query = new WP_Query( $blog_query_args );

		if ( $blog_query->have_posts() ) :
			while ( $blog_query->have_posts() ) :
				$blog_query->the_post();
				get_template_part( 'template-parts/components/card', 'blog' );
			endwhile;

			$total_pages = $blog_query->max_num_pages;

			wp_reset_postdata();
		endif;
	endif;

	exit();
}
