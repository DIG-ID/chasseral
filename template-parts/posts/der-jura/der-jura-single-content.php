<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-20' ); ?>>
	<div class="container mx-auto px-8 grid grid-cols-12">
		<div class="post-content-wrapper col-span-10">
			<h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
			<div class="post-content">
				<?php the_content(); ?>
			</div> 
			<a href="<?php echo esc_url( get_permalink( get_field( 'archives_pages_der_jura', 'options' ) ) ); ?>" class="inline-block mt-10"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></a>
		</div>
	</div>
</article>