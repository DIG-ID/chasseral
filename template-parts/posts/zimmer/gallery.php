<?php
$images = get_field( 'gallery' );
if ( $images ) : ?>
	<section class="section-gallery lg:pt-[120px]">
		<div class="swiper zimmer-swiper w-full mx-auto h-[60vh] lg:h-[80vh]">
			<div class="swiper-wrapper">
				<?php foreach ( $images as $image ) : ?>
					<a class="swiper-slide" data-fancybox="gallery" href="<?php echo esc_url( $image['url'] ); ?>" data-caption="<?php echo esc_html($image['caption']); ?>" >
						<span class="absolute top-0 right-0 bottom-0 left-0 block lg:hidden" style="background: linear-gradient(180deg, rgba(35,65,67,1) 0%, rgba(0,0,0,0) 40%);"></span>
						<img class="block w-full h-full max-auto object-cover" src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
					</a>
				<?php endforeach; ?>
			</div>
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
	</section>
<?php endif;
