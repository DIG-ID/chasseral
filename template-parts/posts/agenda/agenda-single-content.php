<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-20' ); ?>>
	<div class="container mx-auto px-8 grid grid-cols-12">
		<div class="post-content-wrapper col-span-10">
			<p class="start-date text-sm text-[#797979] font-normal whitespace-nowrap mb-4">
				<?php
				$start_date = get_field( 'start_date' );
				echo gmdate( 'l d, F Y', strtotime( $start_date ) );
				?>
			</p>
			<h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<a href="<?php echo get_permalink( get_field( 'agenda_events_agenda_page', 'options' ) ); ?>" class="inline-block mt-10"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></a>

		</div>


	</div>
</article>