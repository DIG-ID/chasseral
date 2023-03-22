<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-8 lg:py-20' ); ?>>
	<div class="container mx-auto px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="post-content-wrapper col-span-10">
			<p class="start-date text-sm text-[#797979] font-normal whitespace-nowrap mb-4">
				<?php
				$start_date = get_field( 'start_date' );
				echo gmdate( 'l d, F Y', strtotime( $start_date ) );
				?>
			</p>
			<h1 class="text-3xl font-bold mb-8"><?php the_title(); ?></h1>
			<figure class="mb-16 event__image">
				<?php
				$size = 'mega-link-thumbnail';
				if( get_the_post_thumbnail() ) :
					echo  get_the_post_thumbnail( $post->ID, $size, '' ); 
				else : ?>
					<img src="https://via.placeholder.com/1000x500">
				<?php endif;
				?>
			</figure>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<a href="<?php echo esc_url( get_permalink( get_field( 'archives_pages_events', 'options' ) ) ); ?>" class="inline-block mt-10">
				<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mr-2">
					<path d="M10.9885 9.6065e-07L12.9458 1.925L5.25385 9.625L21.977 9.625L21.977 12.375L5.25385 12.375L12.9458 20.075L10.9885 22L-5.81821e-05 11L10.9885 9.6065e-07Z" fill="#9C9C9C"/>
				</svg>
				<span class="text-sm text-[#9C9C9C]"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></span>
			</a>
		</div>
	</div>
</article>