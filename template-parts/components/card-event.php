<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-event overflow-hidden mb-20' ); ?>>
	<div class="card-event-wrapper grid grid-cols-2">
		<div class="card-event-image border border-solid border-black">
			<?php
			if ( has_post_thumbnail() ) :
				$img_url = get_the_post_thumbnail_url( get_the_ID(), 'event-thumbnail' );
				?><img class="w-full h-auto object-cover max-h-[400px]" src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>"><?php
			else :
				?><img class="w-full h-auto object-cover max-h-[400px]" src="http://via.placeholder.com/750x750"><?php
			endif;
			?>
		</div>
		<div class="card-event-content flex flex-col justify-center items-start pl-16  border border-solid border-black border-l-0">
			<p class="start-date text-sm text-text-grey font-normal whitespace-nowrap mb-4">
				<?php
				$start_date = get_field( 'start_date' );
				echo gmdate( 'l d, F Y', strtotime( $start_date ) );
				?>
			</p>
			<h3 class="text-3xl font-bold mb-6"><?php the_title(); ?></h3>
			<p class="text-sm font-normal leading-7 max-w-md mb-8 line-clamp-2"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<a href="<?php the_permalink(); ?>" class="btn-general btn-general--<?php do_action( 'cat_color', 'class' ); ?>"><?php esc_html_e( 'Mehr erfahren', 'chasseral' ); ?></a>
		</div>
	</div>
</article>