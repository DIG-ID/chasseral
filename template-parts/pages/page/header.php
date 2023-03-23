<section class="section-page-header py-16 lg:py-24">
	<div class="container mx-auto px-8 grid grid-cols-12">
		<h1 class="title-big !normal-case col-span-10 lg:col-span-5"><?php the_title(); ?></h1>
		<?php
		$page_subtitle    = get_field( 'header_subtitle' );
		$page_description = get_field( 'header_description' );
		if ( ! empty ( get_field( 'header' ) ) ) :
			echo '<div class="section-page-header--details col-span-5">';
			if ( $page_subtitle ) :
				echo '<p class="title-normal !mb-5">' . $page_subtitle . '</p>';
			endif;
			if ( $page_description ) :
				echo '<p class="text-body">' . $page_description . '</p>';
			endif;
			echo '</div>';
		endif;
		?>
	</div>
</section>