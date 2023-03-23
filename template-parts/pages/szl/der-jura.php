<section class="section-der-jura grid grid-cols-1 lg:grid-cols-12 gap-8 border-t border-solid border-black bg-contain bg-no-repeat bg-bottom pt-16 lg:pt-52 h-auto lg:h-[900px] overflow-hidden" style="background-image: url( <?php the_field( 'der_jura_image' ); ?> );">
	<div class="col-start-2 col-span-3">
		<h2 class="title-big"><?php the_field( 'der_jura_title' ); ?></h2>
		<p class="text-3xl font-normal"><?php the_field( 'der_jura_small_description' ); ?></p>
	</div>
	<div class="col-start-5 col-span-3">
		<p class="text-sm text-black font-normal leading-8 mb-16"><?php the_field( 'der_jura_description_column_1' ); ?></p>
		<?php
		$link = get_field( 'der_jura_link' );
		if ( $link ) :
			$link_url    = $link['url'];
			$link_title  = $link['title'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			?>
			<a class="btn-general hover:bg-main-green hover:text-white" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
		<?php endif; ?>
	</div>
	<div class="col-start-8 col-span-3">
		<p class="text-sm text-black font-normal leading-8"><?php the_field( 'der_jura_description_column_2' ); ?></p>
	</div>
</section>