<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-20' ); ?>>
	<div class="container mx-auto px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="post-content-wrapper col-span-1 lg:col-span-10">
			<h1 class="title-big !mb-8"><?php the_title(); ?></h1>
			<div class="agenda-metadata mb-8">
				<p class="start-date text-sm text-black font-bold whitespace-nowrap flex">
					<?php esc_html_e( 'Anlass:', 'chasseral' ); ?>
					<span class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2 ml-2"><?php the_field( 'info_occasion' ); ?></span>
				</p>
				<p class="start-date text-sm text-black font-bold whitespace-nowrap flex">
					<?php esc_html_e( 'Ort:', 'chasseral' ); ?>
					<span class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2 ml-2"><?php echo esc_html( get_the_category_by_ID( get_field( 'info_location' ) ) ); ?></span>
				</p>
				<p class="start-date text-sm text-black font-bold whitespace-nowrap flex">
					<?php esc_html_e( 'Zeitraum:', 'chasseral' ); ?> <span class="font-normal text-text-grey ml-2"><?php the_field( 'info_zeitraum' ); ?></span>
					<?php //$start_date = get_field( 'start_date' ); ?>
					<!-- <time datetime="<?php //echo gmdate( 'c', strtotime( $start_date ) ); ?>" itemprop="datePublished" class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2 ml-2"><?php //echo gmdate( 'l, d. F Y', strtotime( $start_date ) ); ?></time> -->
				</p>
			</div>
			<figure class="mb-16 post__image relative border border-solid border-black">
				<?php
				if ( has_post_thumbnail() ) :
					the_post_thumbnail( 'full' );
				else :
					echo '<img class="w-full h-auto object-cover " src="https://via.placeholder.com/1000x500">';
				endif;
				?>
			</figure>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
			<?php do_action( 'get_archive_page', 'archives_pages_agenda' ); ?>
		</div>
	</div>
</article>