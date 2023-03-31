<?php
if ( $args['class'] ) :
	$template_class = $args['class'];
	$gallery_title = "{$template_class}_gallerie_title";
	$gallery_field = "{$template_class}_gallerie_images";
endif;
?>
<section class="section-gallery section-gallery--<?php echo esc_attr( $template_class ); ?> overflow-hidden">
	<div class="section-gallery-wrapper border-t border-b border-solid border-black flex justify-between items-center relative">
		<h2 class="section-title text-xl lg:text-3xl font-bold uppercase whitespace-nowrap pl-2 lg:pl-8 overflow-hidden text-ellipsis"><?php the_field( $gallery_title ); ?></h2>
		<div class="<?php echo esc_attr( $template_class ); ?>-swiper-buttons relative flex">
			<div class="swiper-button-prev <?php echo esc_attr( $template_class ); ?>-button-prev relative h-[65px] w-[65px] m-0 top-[unset] left-[unset] border-l border-solid border-black text-black transition-all duration-300 ease-in-out after:text-lg after:content-['prev']"></div>
			<div class="swiper-button-next <?php echo esc_attr( $template_class ); ?>-button-next relative h-[65px] w-[65px] m-0 top-[unset] right-[unset] border-l border-solid border-black text-black transition-all duration-300 ease-in-out after:text-lg after:content-['next']"></div>
		</div>
	</div>
	<?php
	$gallery = get_field( $gallery_field );
	if ( $gallery ) :
		echo '<div class="swiper '. $template_class . '-swiper"><span></span><div class="swiper-wrapper">';
		foreach ( $gallery as $image ) :
			$img_url = $image['sizes']['gallery-full'];
			echo '<div class="swiper-slide">';
			echo '<a href="' . esc_url( $img_url ) . '" data-fancybox="gallery-' . $template_class . '" data-caption="' . esc_html( $image['caption'] ) . '" ><img class="w-full h-full xl:h-auto object-cover max-h-[250px] sm:max-h-[350px] md:max-h-[500px] lg:max-h-[600px] xl:max-h-[700px]" src="' . esc_url( $img_url ) . '"></a>';
			echo '</div>';
		endforeach;
		echo '</div></div>';
	endif;
	if ( $gallery ) :
		echo '<div class="swiper swiper-thumbnail '. $template_class . '-swiper-thumbnail hidden"><div class="swiper-wrapper">';
		foreach ( $gallery as $image ) :
			echo '<div class="swiper-slide">';
			echo '<img class="w-full h-auto object-cover max-h-[150px]" src="' . esc_url( $image['sizes']['thumbnail'] ) . '">';
			echo '</div>';
		endforeach;
		echo '</div></div>';
	endif;
	?>
</section>