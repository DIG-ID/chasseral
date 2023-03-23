<section class="section-blog container mx-auto border-t border-solid border-black px-8 py-32 overflow-hidden">
	<h1 class="section-title text-3xl font-bold mb-16"><?php esc_html_e( 'Blog', 'chasseral' ) ?></h1>
	<div class="button-group filters-button-group mb-10">
		<?php
		$blog_cats = get_field( 'blog_blog_filters', 'options' );
		if ( $blog_cats ) :
			echo '<button class="btn-general btn-filter is-checked" data-filter="*">' . esc_html__( 'Alle', 'chasseral' ) . '</button>';
			foreach ( $blog_cats as $bcat ) :
				echo '<button class="btn-general btn-filter btn-general--' . $bcat->slug . ' hover:bg-[' . get_field( 'category_color', 'category_' . $bcat->term_id ) . ']" data-filter=".category-' . $bcat->slug . '">' . $bcat->name . '</button>';
			endforeach;
		endif;
		?>
	</div>
	<div class="blog-grid grid grid-cols-3 gap-5 w-full">
		<?php get_template_part( 'template-parts/loops/loop', 'blog' ); ?>
	</div>
	<!--<div class="blog-grid--loading">
		<div class="blog-grid--container">

		</div>
	</div> -->
</section>