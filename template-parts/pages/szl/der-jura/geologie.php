<section class="section-geologie grid grid-cols-2 border-t border-solid border-black h-[700px]">
	<div class="cols-span-1 border-r border-solid border-black pt-36 pb-0 pl-36">
		<h2 class="text-black text-3xl font-bold mb-16 "><?php the_field( 'geologie_title' ); ?></h2>
		<div class="section-geologie-description text-sm text-black font-normal leading-8 mb-16 max-w-lg"><?php the_field( 'geologie_description' ); ?></div>
		<?php
		$link = get_field( 'geologie_link' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn-general hover:bg-main-green hover:text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
	<div class="cols-span-1">
		<?php
		$geologie_image = get_field( 'geologie_image' );
		if ( ! empty( $geologie_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $geologie_image, 'block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $geologie_image ) ); ?>" /><?php
		endif;
		?>
	</div> 
</section>