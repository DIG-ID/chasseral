<section class="section-history grid grid-cols-2 border-t border-solid border-black h-[700px] overflow-hidden">
	<div class="cols-span-1 border-r border-solid border-black">
		<?php
		$history_image = get_field( 'history_image' );
		if ( ! empty( $history_image ) ) :
			?><img class="w-full h-full object-cover border border-solid border-black" src="<?php echo esc_url( wp_get_attachment_image_url( $history_image, 'block-images' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $history_image ) ); ?>" /><?php
		endif;
		?>
	</div> 
	<div class="cols-span-1 pt-36 pb-0 pl-36">
		<h2 class="text-black text-3xl font-bold mb-16"><?php the_field( 'history_title' ); ?></h2>
		<div class="section-history-description text-sm text-black font-normal leading-8 mb-16 max-w-lg"><?php the_field( 'history_description' ); ?></div>
		<?php
		$link = get_field( 'history_link' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn-general hover:bg-main-green hover:text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
</section>