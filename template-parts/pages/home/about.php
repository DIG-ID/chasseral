<section class="section-about pt-16 lg:pt-20 xl:pt-36 pb-[20vh] md:pb-[45vh] 2xl:pb-[65vh] bg-contain bg-no-repeat bg-bottom border-t border-solid overflow-hidden" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( get_field( 'about_background_image' ), 'full' ) ); ?>);">
	<div class="lg:container mx-auto px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="col-span-1 lg:col-span-4">
			<h2 class="title-normal !font-normal"><?php the_field( 'about_title' ); ?></h2>
		</div>
		<div class="col col-span-1 lg:col-span-6 xl:col-span-5 lg:col-start-6">
			<p class="text-body"><?php the_field( 'about_description' ); ?></p>
		</div>
	</div>
</section>