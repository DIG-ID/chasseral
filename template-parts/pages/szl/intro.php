<section class="section-szl-intro grid grid-cols-1 lg:grid-cols-12 border-t border-solid border-black py-8 px-8 lg:px-0 lg:py-36 overflow-hidden">
	<div class="col-span-1 lg:col-span-5 lg:col-start-2">
		<h1 class="title-big"><?php the_field( 'intro_title' ); ?></h1>
		<div class="szl-logos w-full flex">
			<?php
			$szl_logos = get_field( 'intro_szl_logos' );
			if ( $szl_logos ) :
				foreach ( $szl_logos as $logo ) :
					?><img class="max-w-[180px] h-auto object-cover" src="<?php echo wp_get_attachment_image_url( $logo, 'full' ); ?>" alt="<?php echo wp_get_attachment_caption( $logo ); ?>" /><?php
				endforeach;
			endif;
			?>
		</div>
	</div>
	<div class="col-span-1 lg:col-span-4 lg:col-start-8">
		<p class="text-sm text-black font-normal leading-8 mb-16 max-w-lg"><?php the_field( 'intro_description' ); ?></p>
	</div>
</section>