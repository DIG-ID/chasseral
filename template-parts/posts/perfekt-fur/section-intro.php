<section id="single-perfekt-fur-intro" class="section-perfekt-fur__intro grid grid-cols-1">
	<div class="w-full chasseral__col border-b border-solid border-black">
		<?php
		if ( has_post_thumbnail() && get_field( 'header_image_position' ) === 'Top' ) :
			the_post_thumbnail( 'chasseral-jura-headers-top' );
		elseif ( has_post_thumbnail() && get_field( 'header_image_position' ) === 'Center' ) :
			the_post_thumbnail( 'chasseral-jura-headers' );
		else :
			echo '<img src="https://via.placeholder.com/1920x500">';
		endif;
		?>
		</div>
		<div class="p-8 lg:pt-20 lg:pb-20 container max-w-7xl mx-auto">
			<div class="mb-8 lg:mb-20 w-full md:w-3/4 lg:w-full xl:w-3/4">
				<h2 class="title-big"><?php the_title(); ?></h2>
			</div>
			<div class="grid lg:grid-cols-2 lg:gap-20 xl:gap-40 md:mr-[3%] lg:mr-[5%] xl:mr-[20%]">
				<div class="col-span-1">
					<p class="text-body"><?php the_field( 'general_information' ); ?></p>
				</div>
				<div class="col-span-1">
					<p class="text-body"><?php the_field( 'general_information_right' ); ?></p>
				</div>
				
			</div>
			<?php do_action( 'get_archive_page', 'archives_pages_perfekt_fur' ); ?>
	</div>
</section>