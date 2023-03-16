<section class="section-form border-t border-solid border-black py-36">
	<div class="container mx-auto px-8">
		<h2 class="text-3xl font-bold mb-8"><?php the_field( 'form_title' ); ?></h2>
		<?php echo do_shortcode( get_field( 'form_form_shortcode' ) ); ?>
	</div>
</section>