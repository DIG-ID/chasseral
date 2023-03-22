<section class="section-form border-t border-solid border-black py-16 lg:py-36 overflow-hidden">
	<div class="container mx-auto px-8">
		<h2 class="text-2xl lg:text-3xl font-bold mb-8"><?php the_field( 'form_title' ); ?></h2>
		<?php echo do_shortcode( get_field( 'form_form_shortcode' ) ); ?>
	</div>
</section>