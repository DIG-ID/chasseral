<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-8 lg:py-20' ); ?>>
	<div class="container mx-auto px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="post-content-wrapper col-span-10">
			<p class="start-date text-sm text-[#797979] font-normal whitespace-nowrap mb-4">
				<?php
				$start_date = get_field( 'start_date' );
				echo gmdate( 'l d, F Y', strtotime( $start_date ) );
				?>
			</p>
			<h1 class="title-normal !mb-8"><?php the_title(); ?></h1>
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
			<div class="post-content text-body lg:pr-[20%]">
				<?php the_content(); ?>
			</div>
			<?php do_action( 'get_archive_page', 'archives_pages_events' ); ?>
		</div>
	</div>
</article>