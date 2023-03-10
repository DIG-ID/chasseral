<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-20' ); ?>>
	<div class="container mx-auto px-8 grid grid-cols-12">
		<div class="post-content-wrapper col-span-10">

			<div class="start-date flex mb-2">
				<svg viewBox="0 0 1024 1024" xml:space="preserve" class="w-[18px] max-w-[18px] block mr-2"><path d="M731.4 146.3V73.1h-73.1v73.1H365.7V73.1h-73.1v73.1H109.7v804.6h804.6V146.3H731.4z m-438.8 73.1v73.1h73.1v-73.1h292.6v73.1h73.1v-73.1h109.7v146.3H182.9V219.4h109.7zM182.9 877.7V438.9h658.3v438.9H182.9z" fill="#797979"></path><path d="M402.3 512h73.1v73.1h-73.1zM548.6 512h73.1v73.1h-73.1zM694.9 512H768v73.1h-73.1zM256 621.7h73.1v73.1H256zM402.3 621.7h73.1v73.1h-73.1zM548.6 621.7h73.1v73.1h-73.1zM694.9 621.7H768v73.1h-73.1zM256 731.4h73.1v73.1H256zM402.3 731.4h73.1v73.1h-73.1zM548.6 731.4h73.1v73.1h-73.1z" fill="#797979"></path></svg>
				<p class="text-sm text-[#797979] font-normal whitespace-nowrap">
					<?php
					$start_date = get_field( 'start_date' );
					echo gmdate( 'l d, F Y', strtotime( $start_date ) );
					?>
				</p>
			</div>
			<h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<a href="<?php echo get_permalink( get_field( 'agenda_events_agenda_page', 'options' ) ); ?>" class="inline-block mt-10"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></a>

		</div>


	</div>
</article>