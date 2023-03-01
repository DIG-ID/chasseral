<section class="section-connection grid grid-cols-1 lg:grid-cols-12 pb-20 lg:pb-40 px-8 xl:px-0">
	<div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20">
		<p class="flex items-center text-sm text-main-green font-semibold tracking-wider uppercase mb-8"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'activitities_connection_small_title', 'aktivitaten_archive' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-span-7 xl:col-span-8">
		<h2 class="text-xl lg:text-2xl font-bold mb-8"><?php the_field( 'activitities_connection_title', 'aktivitaten_archive' ); ?></h2>
	</div>
	<div class="col-span-1 lg:col-span-5 xl:col-start-2 xl:col-span-3 lg:ml-7 lg:mr-20">
		<p class="text-main-green text-sm leading-8 tracking-wider mb-8 lg:mb-0"><?php the_field( 'activitities_connection_description', 'aktivitaten_archive' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-span-7 xl:col-span-8">
		<?php
		$image = get_field( 'activitities_connection_image', 'aktivitaten_archive' );
		if ( ! empty( $image ) ) :
			echo '<div class="image-wrapper relative"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span><img class="w-full object-cover min-h-[300px] max-h-[650px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
		endif;
		?>
	</div>
</section>
