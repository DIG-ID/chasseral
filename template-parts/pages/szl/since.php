<section class="section-since grid grid-cols-1 lg:grid-cols-2 border-t border-solid border-black h-auto lg:h-[700px] overflow-hidden">
	<div class="cols-span-1 border-r border-solid border-black p-8 lg:pt-36 lg:pb-0 lg:pl-36">
		<h2 class="text-black text-3xl font-bold mb-16 "><?php the_field( 'since_title' ); ?></h2>
		<p class="text-sm text-black font-normal leading-8 mb-16 max-w-lg"><?php the_field( 'since_description' ); ?></p>
		<?php
		$link = get_field( 'since_link' );
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
		$since_image = get_field( 'since_image' );
		if ( ! empty( $since_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $since_image, 'block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $since_image ) ); ?>" /><?php
		endif;
		?>
	</div> 
</section>