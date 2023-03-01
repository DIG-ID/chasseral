<section class="section-breakfast grid auto-rows-auto grid-cols-2 lg:grid-cols-12 pb-20 lg:pb-40 px-8 lg:px-0">
	<div class="col-span-2 lg:col-start-2 lg:col-span-3 lg:ml-0 lg:mr-0 xl:ml-7 xl:mr-20 flex flex-col justify-between mb-10 lg:mb-0">
		<p class="flex items-center text-sm text-main-green font-semibold tracking-wider uppercase"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'breakfast_small_title' ); ?></p>
	</div>
	<div class="col-span-2 lg:col-span-8 mb-8">
		<h2 class="text-xl lg:text-2xl font-bold"><?php the_field( 'breakfast_title' ); ?></h2>
	</div>
	<div class="section-breakfast__col1 col-span-2 relative mb-10 lg:mb-0 lg:col-start-2 lg:col-span-3 lg:ml-7 lg:mr-20 order-2 lg:order-1">
		<p class="text-main-green text-sm leading-8 tracking-wider"><?php the_field( 'breakfast_description' ); ?></p>
		<div class="swiper-buttons-wrapper block relative h-12 w-24 mt-5">
			<div class="swiper-button-next b-swiper-button-next"></div>
			<div class="swiper-button-prev b-swiper-button-prev"></div>
		</div>
	</div>
	<div class="col-span-2 lg:col-span-8 order-1 lg:order-2 mb-10 lg:mb-0">
	<?php 
	$bf_images = get_field('breakfast_breakfast_slider');
	if( $bf_images ): ?>
		<div id="breakfast-slider" class="swiper breakfast-swiper">
			<div class="swiper-wrapper">
				<?php foreach ( $bf_images as $bf_image ) : ?>
					<a class="swiper-slide">
						<span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span>
						<img class="w-full object-cover max-h-[650px]" src="<?php echo esc_url( $bf_image['url'] ); ?>" alt="<?php echo esc_attr( $bf_image['alt'] ); ?>" />
					</a>
				<?php endforeach; ?>
			</div>
			
		</div>
	<?php endif; ?>
	</div>
	<div class="col-span-1 lg:col-start-5 lg:col-span-2 lg:mt-20 order-3">
		<h3 class="text-main-green text-sm font-semibold tracking-wider mb-10"><?php the_field( 'breakfast_schedule_title' ); ?></h3>
		<p class="text-main-green text-sm leading-8 tracking-wider"><?php the_field( 'breakfast_schedule_content' ); ?></p>
	</div>
	<div class="col-span-1 lg:col-start-7 lg:col-span-3 lg:mt-20 order-4">
		<h3 class="text-main-green text-sm font-semibold tracking-wider mb-10"><?php the_field( 'breakfast_price_title' ); ?></h3>
		<p class="text-main-green text-sm leading-8 tracking-wider"><?php the_field( 'breakfast_price_content' ); ?></p>
	</div>
</section>
