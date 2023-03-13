<section class="section-blog container mx-auto px-8 py-32">
	<h1 class="section-title text-3xl font-bold mb-16"><?php esc_html_e( 'Blog', 'chasseral' ) ?></h1>
	<div class="button-group filters-button-group">
		<?php
		$blog_cats = get_categories(
			array(
				'orderby'      => 'name',
				'exclude_empty' => true
			)
		);
		//echo '<pre>' . var_dump($blog_cats) . '</pre>';

		if ( $blog_cats ) :
			echo '<button class="button is-checked" data-filter="*">show all</button>';
			foreach ( $blog_cats as $cat ) :
				echo '<pre>' . var_dump($cat) . '</pre>';
				echo '<button class="button is-checked" data-filter="*">show all</button>';
			endforeach;
		endif;
		?>
	</div>
	<div class="blog-list grid grid-cols-3 gap-5">
		<?php get_template_part( 'template-parts/loops/loop', 'blog' ); ?>
	</div>
</section>