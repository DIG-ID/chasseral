<article id="post-<?php the_ID(); ?>" <?php post_class( 'card-event swiper-slide overflow-hidden' ); ?>>
	<div class="card-event-content grid grid-cols-2 border-b border-solid border-black">
		<div class="col border-r border-solid border-black ">
			<?php
			if ( has_post_thumbnail() ) :
				$img_url = get_the_post_thumbnail_url( get_the_ID(), 'event-thumbnail' );
				?><img class="w-full h-auto object-cover max-h-[700px]" src="<?php echo esc_url( $img_url ); ?>" alt="<?php echo get_the_post_thumbnail_caption(); ?>"><?php
			else :
				?><img class="w-full h-auto object-cover max-h-[700px]" src="http://via.placeholder.com/750x750"><?php
			endif;
			?>

		</div>
		<div class="flex flex-col justify-center items-start pl-16 bg-bg-color">
			<h3 class="text-3xl font-bold mb-2"><?php the_title(); ?></h3>
			<div class="start-date flex mb-8">
				<svg viewBox="0 0 1024 1024" xml:space="preserve" class="w-[18px] max-w-[18px] block mr-2"><path d="M731.4 146.3V73.1h-73.1v73.1H365.7V73.1h-73.1v73.1H109.7v804.6h804.6V146.3H731.4z m-438.8 73.1v73.1h73.1v-73.1h292.6v73.1h73.1v-73.1h109.7v146.3H182.9V219.4h109.7zM182.9 877.7V438.9h658.3v438.9H182.9z" fill="#797979"></path><path d="M402.3 512h73.1v73.1h-73.1zM548.6 512h73.1v73.1h-73.1zM694.9 512H768v73.1h-73.1zM256 621.7h73.1v73.1H256zM402.3 621.7h73.1v73.1h-73.1zM548.6 621.7h73.1v73.1h-73.1zM694.9 621.7H768v73.1h-73.1zM256 731.4h73.1v73.1H256zM402.3 731.4h73.1v73.1h-73.1zM548.6 731.4h73.1v73.1h-73.1z" fill="#797979"></path></svg>
				<p class="text-sm text-[#797979] font-normal whitespace-nowrap">
					<?php
					$start_date = get_field( 'start_date' );
					echo gmdate( 'd M Y', strtotime( $start_date ) );
					?>
				</p>
			</div>
			<?php
			$event_cat      = get_the_category();
			$event_cat_name = $event_cat[0]->cat_name;
			?>
			<p class="badge text-white text-[13px] font-semibold py-1 px-3 mb-10" style="background-color: <?php do_action( 'cat_color', 'hex' ); ?>;"><?php echo $event_cat_name; ?></p>
			<p class="text-sm font-normal leading-7 max-w-md mb-8"><?php echo esc_html( get_the_excerpt() ); ?></p>
			<a href="<?php the_permalink(); ?>" class="btn-general btn-general--<?php do_action( 'cat_color', 'class' ); ?>"><?php esc_html_e( 'Entrenten', 'chasseral' ); ?></a>
		</div>
	</div>
</article>