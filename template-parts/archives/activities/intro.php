<section class="section-intro pt-40 lg:pt-80 pb-20 lg:pb-40 px-8 xl:px-0">
	<div class="lg:container mx-auto grid grid-cols-1 lg:grid-cols-12">
		<div class="title col-span-1 lg:col-span-3">
			<h1 class="text-2xl lg:text-5xl text-main-green font-extrabold mb-5 lg:mb-12"><?php the_field( 'activitities_intro_title', 'aktivitaten_archive' ); ?></h1>
		</div>
		<div class="description col-span-1 lg:col-start-8 lg:col-span-4">
			<p class="text-xs lg:text-sm text-main-green leading-8 lg:leading-8 tracking-wider">
				<?php the_field( 'activitities_intro_description', 'aktivitaten_archive' ); ?>
			</p>
		</div>
	</div>
</section>
