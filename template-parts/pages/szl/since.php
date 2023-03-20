<section class="section-since grid grid-cols-2 border-t border-solid border-black h-[700px]">
	<div class="cols-span-1 border-r border-solid border-black pt-36 pb-0 pl-36">
		<h2 class="text-black text-3xl font-bold mb-16 "><?php the_field( 'since_title' ); ?></h2>
		<p class="mb-16 leading-8 max-w-lg"><?php the_field( 'since_description' ); ?></p>
		<?php
		$link = get_field( 'since_link' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn-general hover:bg-main-green" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
	<div class="cols-span-1">
		<?php
		$since_image = get_field( 'since_image' );
		console_log( $since_image );
		if ( ! empty( $since_image ) ) :
			?><img class="w-full h-full object-cover" src="<?php echo wp_get_attachment_image_src( $since_image, 'block-images' ); ?>" alt="<?php echo wp_get_attachment_caption( $since_image ); ?>" /><?php
		endif;
		?>
	</div> 
</section>