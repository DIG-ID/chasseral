<?php
$iframe = get_field( 'webcam_iframe' );
if ( $iframe ) :
	?>
	<section class="section-webcam py-32 border-t border-solid border-black overflow-hidden">
		<div class="container mx-auto px-8">
			<h2 class="section-title text-3xl font-bold mb-16"><?php the_field( 'webcam_title' ); ?></h2>
			<iframe id="webcam" class="block w-full object-cover" src="<?php echo esc_url( $iframe ); ?>" frameborder="0" height="600" loading="lazy" scrolling="auto" title="Chasseral Live Webcam by Swisscom" src="https://chasseral.roundshot.com/"></iframe>
		</div>
	</section>
	<?php
endif;