<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-36' ); ?>>
	<div class="container mx-auto px-8 grid grid-cols-12">
		<div class="post-content-wrapper col-span-10">
			<h1 class="title-normal !mb-8"><?php the_title(); ?></h1>
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
					<?php esc_html_e( 'Zeitraum:', 'chasseral' ); ?>
					<?php $start_date = get_field( 'start_date' ); ?>
					<time datetime="<?php echo gmdate( 'c', strtotime( $start_date ) ); ?>" itemprop="datePublished" class="block font-sans text-sm text-text-grey font-normal whitespace-nowrap mb-2 ml-2"><?php echo gmdate( 'l d, F Y', strtotime( $start_date ) ); ?></time>
				</p>
			</div>
			<figure class="mb-16 post__image relative">
				<?php
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
			<a href="<?php echo get_permalink( get_field( 'archives_pages_agenda', 'options' ) ); ?>" class="inline-block mt-10">
				<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mr-2">
					<path d="M10.9885 9.6065e-07L12.9458 1.925L5.25385 9.625L21.977 9.625L21.977 12.375L5.25385 12.375L12.9458 20.075L10.9885 22L-5.81821e-05 11L10.9885 9.6065e-07Z" fill="#9C9C9C"/>
				</svg>
				<span class="text-sm text-[#9C9C9C]"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></span>
			</a>
		</div>
	</div>
</article>