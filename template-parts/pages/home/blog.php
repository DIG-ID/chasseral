<section class="section-blog container mx-auto px-8 py-32 overflow-hidden">
	<h2 class="section-title text-3xl font-bold mb-16"><?php esc_html_e( 'Blog', 'chasseral' ) ?></h2>
	<div class="blog-list grid grid-cols-3 gap-5">
		<?php get_template_part( 'template-parts/loops/loop', 'blog-home' ); ?>
	</div>
</section>