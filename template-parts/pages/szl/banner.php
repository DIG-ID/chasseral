<section class="section section-szl-banner w-full xl:max-h-[500px] overflow-hidden">
	<div class="swiper banner-szl-swiper">
		<div class="swiper-wrapper">
			<?php
			$gallery = get_field( 'banner_gallery' );
			if ( $gallery ) :
				foreach ( $gallery as $image ) :
					$img_url = $image['url'];
					echo '<div class="swiper-slide">';
					echo '<img class="w-full h-auto object-cover" src="' . esc_url( $img_url ) . '">';
					echo '</div>';
				endforeach;
			endif;
			?>
		</div>
		<div class="swiper-button-prev banner-szl-button-prev"></div>
		<div class="swiper-button-next banner-szl-button-next"></div>
	</div>
</section>