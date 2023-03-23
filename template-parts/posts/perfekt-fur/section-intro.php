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
			<?php do_action( 'get_archive_page', 'archives_pages_perfekt_fur' ); ?>
	</div>
</section>