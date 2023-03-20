<section class="section-szl-intro grid grid-cols-12 border-t border-solid border-black py-36">
	<div class="col-span-5 col-start-2">
		<h1 class="text-6xl font-bold uppercase mb-10"><?php the_field( 'intro_title' ); ?></h1>
		<div class="szl-logos w-full flex">
			<?php
			$images = get_field( 'intro_szl_logos' );
			if ( $images ) :
				foreach ( $images as $image ) :
					?><img src="<?php echo esc_url( $image['sizes']['thumbnail'] ); ?>" alt="<?php echo esc_attr( $image['alt']) ; ?>" /><?php
				endforeach;
			endif;
			?>
		</div>
	</div>
	<div class="col-span-4 col-start-8">
		<p class="text-sm leading-6 max-w-lg"><?php the_field( 'intro_description' ); ?></p>
	</div>
</section>