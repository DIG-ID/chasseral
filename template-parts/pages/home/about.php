<section class="section-about pt-36 pb-[500px] bg-contain bg-no-repeat bg-bottom overflow-hidden" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( get_field( 'about_background_image' ), 'full' ) ); ?>);">
	<div class="container mx-auto px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="col-span-1 lg:col-span-12">
			<h2 class="section-title section-title text-3xl font-bold mb-16"><?php the_field( 'about_title' ); ?></h2>
		</div>
		<div class="col-span-1 lg:col-span-4">
			<p class="section-subtitle text-3xl font-normal"><?php the_field( 'about_subtitle' ); ?></p>
		</div>
		<div class="col col-span-1 lg:col-span-5 lg:col-start-6">
			<p class="section-description text-sm font-normal leading-7"><?php the_field( 'about_description' ); ?></p>
		</div>
	</div>
</section>