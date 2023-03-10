<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden py-20' ); ?>>
	<div class="container mx-auto px-8">
		<h1 class="text-3xl font-bold mb-10"><?php the_title(); ?></h1>
		<section class="section-events-list py-20">
			<?php get_template_part( 'template-parts/loops/loop', 'events' ); ?>
		</section>
	</div>
</article>