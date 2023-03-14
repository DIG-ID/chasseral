<section class="section-blog container mx-auto px-8 py-32">
	<h1 class="section-title text-3xl font-bold mb-16"><?php esc_html_e( 'Blog', 'chasseral' ) ?></h1>
	<div class="button-group filters-button-group mb-10">
		<?php
		$blog_cats = get_categories(
			array(
				'orderby'       => 'name',
				'exclude_empty' => true,
				'exclude'       => get_cat_ID( 'uncategorized' ),
			)
		);
		if ( $blog_cats ) :
			echo '<button class="btn-general btn-filter is-checked" data-filter="*">' . esc_html__( 'Alle', 'chasseral' ) . '</button>';
			foreach ( $blog_cats as $bcat ) :
				echo '<button class="btn-general btn-filter btn-general--' . $bcat->slug . '" data-filter=".category-' . $bcat->slug . '">' . $bcat->name . '</button>';
			endforeach;
		endif;
		?>
	</div>
	<div class="blog-grid--loading">
		<div class="blog-grid--container">

		</div>
	</div>
</section>