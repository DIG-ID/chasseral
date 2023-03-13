<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-agenda-event swiper-slide overflow-hidden' ); ?>>
	<div class="card-event-wrapper grid grid-cols-2 border-b border-solid border-black">
		<div class="card-event-image border-r border-solid border-black ">
			<?php
			if ( has_post_thumbnail() ) :
				$img_url = get_the_post_thumbnail_url( get_the_ID(), 'agenda-event-thumbnail' );
				?><img class="w-full h-auto object-cover max-h-[700px]" src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>"><?php
			else :
				?><img class="w-full h-auto object-cover max-h-[700px]" src="http://via.placeholder.com/750x750"><?php
			endif;
			?>
		</div>
		<div class="card-event-content flex flex-col justify-center items-start pl-16 bg-bg-color">
			<p class="start-date text-sm text-text-grey font-normal whitespace-nowrap mb-2">
				<?php
				$start_date = get_field( 'start_date' );
				echo gmdate( 'l d, F Y', strtotime( $start_date ) );
				?>
			</p>
			<h3 class="text-3xl font-bold mb-8"><?php the_title(); ?></h3>
			<?php
			if ( get_post_type( get_the_ID() ) === 'agenda' ) :
				echo '<p class="badge bg-main-green text-white text-[13px] font-semibold py-1 px-3 mb-10">' . esc_html__( 'SZL', 'chasseral' ) . '</p>';
				echo '<p class="text-sm font-normal leading-7 max-w-md mb-8 line-clamp-4">' . esc_html( get_the_excerpt() ) . '</p>';
				echo '<a href="' . esc_url( get_permalink() ) . '" class="btn-general btn-general--szl">' . esc_html__( 'Entrenten', 'chasseral' ) . '</a>';
			elseif ( get_post_type( get_the_ID() ) === 'events' ) :
				echo '<p class="badge bg-main-red text-white text-[13px] font-semibold py-1 px-3 mb-10">' . esc_html__( 'Hotel & Restaurant', 'chasseral' ) . '</p>';
				echo '<p class="text-sm font-normal leading-7 max-w-md mb-8 line-clamp-4">' . esc_html( get_the_excerpt() ) . '</p>';
				echo '<a href="' . esc_url( get_permalink() ) . '" class="btn-general btn-general--hotel">' . esc_html__( 'Entrenten', 'chasseral' ) . '</a>';
			endif;
			?>
		</div>
	</div>
</article>