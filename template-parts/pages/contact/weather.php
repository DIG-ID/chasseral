<section class="section-weather py-32 border-t border-solid border-black">
	<div class="container mx-auto px-8">
		<h2 class="section-title text-3xl font-bold mb-16"><?php esc_html_e( 'Weather', 'chasseral' ) ?></h2>
		<?php do_action( 'display_weather_forecast' ); ?>
	</div>
</section>