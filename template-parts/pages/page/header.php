<section class="section-page-header py-24 mt-[65px]">
	<div class="container mx-auto px-8 grid grid-cols-12">
		<h1 class="text-6xl font-bold col-span-4"><?php the_title(); ?></h1>
		<?php
		$page_subtitle    = get_field( 'header_subtitle' );
		$page_description = get_field( 'header_description' );
		if ( ! empty ( get_field( 'header' ) ) ) :
			echo '<div class="section-page-header--details col-span-5">';
			if ( $page_subtitle ) :
				echo '<p class="text-3xl font-sans font-bold mb-5">' . $page_subtitle . '</p>';
			endif;
			if ( $page_description ) :
				echo '<p class="text-sm font-sans font-normal leading-7">' . $page_description . '</p>';
			endif;
			echo '</div>';
		endif;
		?>
	</div>
</section>