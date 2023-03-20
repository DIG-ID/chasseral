<section class="section-szl-intro grid grid-cols-12 border-t border-solid border-black py-36">
	<div class="col-span-5 col-start-2">
		<h1 class="text-6xl font-bold uppercase mb-10"><?php the_field( 'intro_title' ); ?></h1>
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
	<div class="col-span-4 col-start-8">
		<p class="text-sm leading-6 max-w-lg"><?php the_field( 'intro_description' ); ?></p>
	</div>
</section>