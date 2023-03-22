<section id="single-perfekt-fur-intro" class="section-perfekt-fur__intro grid grid-cols-1">
	<div class="w-full chasseral__col">
		<?php
		if ( has_post_thumbnail() ) :
			the_post_thumbnail( 'chasseral-jura-headers' );
		else :
			echo '<img src="https://via.placeholder.com/1920x500">';
		endif;
		?>
		</div>
		<div class="p-8 lg:py-40 container max-w-7xl mx-auto">
			<div class="mb-8 lg:mb-20 w-full">
				<h2 class="title-big"><?php the_title(); ?></h2>
			</div>
			<div>
				<p class="text-body lg:columns-2 lg:gap-40 lg:mr-[30%]"><?php the_field( 'general_information' ); ?></p>
			</div>
			<a href="<?php echo esc_url( get_permalink( get_field( 'archives_pages_perfekt_fur', 'options' ) ) ); ?>" class="inline-block mt-10">
				<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mr-2">
					<path d="M10.9885 9.6065e-07L12.9458 1.925L5.25385 9.625L21.977 9.625L21.977 12.375L5.25385 12.375L12.9458 20.075L10.9885 22L-5.81821e-05 11L10.9885 9.6065e-07Z" fill="#9C9C9C"/>
				</svg>
				<span class="text-sm text-[#9C9C9C]"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></span>
			</a>
	</div>
</section>