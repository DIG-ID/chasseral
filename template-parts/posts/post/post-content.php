<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-8 lg:py-20' ); ?>>
	<div class="container mx-auto px-8 py-36 grid grid-cols-1 lg:grid-cols-12">
		<div class="post-content-wrapper col-span-10">
			<time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished" class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2"><?php echo get_the_date(); ?></time>
			<h1 class="title-normal"><?php the_title(); ?></h1>
			<figure class="mb-16 post__image relative">
				<?php
				$badge_label = get_field( 'category_badge_label', 'category_' . $post_cat_id );
				if ( $badge_label ) :
					?><p class="badge text-white text-[13px] font-semibold py-1 px-3 mb-10 absolute top-5 left-5 uppercase" style="background-color: <?php do_action( 'cat_color', 'hex' ); ?>;"><?php echo esc_html( $badge_label ); ?></p><?php
				endif;
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'full' );
				else :
					echo '<img class="w-full h-auto object-cover" src="https://via.placeholder.com/1000x500">';
				endif;
				?>
			</figure>

			<div class="post-content">
				<?php the_content(); ?>
			</div>

			<a href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>" class="inline-block mt-10">
				<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mr-2">
					<path d="M10.9885 9.6065e-07L12.9458 1.925L5.25385 9.625L21.977 9.625L21.977 12.375L5.25385 12.375L12.9458 20.075L10.9885 22L-5.81821e-05 11L10.9885 9.6065e-07Z" fill="#9C9C9C"/>
				</svg>
				<span class="text-sm text-[#9C9C9C]"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></span>
			</a>
		</div>
	</div>
</article>