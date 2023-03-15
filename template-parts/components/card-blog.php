<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-blog overflow-hidden block mb-10' ); ?>>
	<a href="<?php the_permalink(); ?>" class="card-blog-wrapper">
		<div class="card-blog-thumbnail relative mb-5">
			<?php
			$post_cat    = get_the_category();
			$post_cat_id = $post_cat[0]->term_id;
			$badge_label = get_field( 'category_badge_label', 'category_' . $post_cat_id );
			if ( $badge_label ) :
				?><p class="badge text-white text-[13px] font-semibold py-1 px-3 mb-10 absolute top-5 left-5 uppercase" style="background-color: <?php do_action( 'cat_color', 'hex' ); ?>;"><?php echo esc_html( $badge_label ); ?></p><?php
			endif;
			if ( has_post_thumbnail() ) :
				$img_url = get_the_post_thumbnail_url( get_the_ID(), 'thumbnail' );
				?><img class="w-full h-auto object-cover max-h-[300px]" src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo esc_html( get_the_post_thumbnail_caption() ); ?>"><?php
			else :
				?><img class="w-full h-auto object-cover max-h-[300px]" src="http://via.placeholder.com/750x750"><?php
			endif;
			?>
		</div>
		<div class="card-blog-content bg-bg-color">
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2"><?php echo get_the_date(); ?></time>
			<h3 class="text-3xl font-bold mb-4 line-clamp-2"><?php the_title(); ?></h3>
			<p class="text-sm font-normal leading-7 max-w-md mb-8 line-clamp-4"><?php echo esc_html( get_the_excerpt() ); ?></p>
		</div>
	</a>
</article>