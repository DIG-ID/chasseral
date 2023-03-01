<section class="section-ourtips lg:container mx-auto grid grid-col-1 lg:grid-cols-12 pb-6 lg:pb-40 px-8 xl:px-0">
	<div class="cpl-span-1 lg:col-span-5 xl:col-span-3">
		<p class="flex items-center text-sm text-main-green font-semibold tracking-wider uppercase mb-8"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'activitities_our_tips_small_title', 'aktivitaten_archive' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-span-7 xl:col-span-8 xl:ml-16">
		<h2 class="text-xl lg:text-2xl font-bold mb-8"><?php the_field( 'activitities_our_tips_title', 'aktivitaten_archive' ); ?></h2>
	</div>
	<div class="col-span-1 mb-14 lg:col-span-5 xl:col-span-3">
		<p class="text-main-green text-sm leading-8 tracking-wider"><?php the_field( 'activitities_our_tips_description', 'aktivitaten_archive' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-span-7 xl:col-span-8 xl:ml-16">
		<?php
		if ( have_posts() ) :
			echo '<div class="activities-offers grid grid-cols-1 lg:grid-cols-3 lg:gap-4">';
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/components/card', 'aktivitaten' );
			endwhile;
			echo '</div>';
		endif;
		?>
	</div>
</section>
