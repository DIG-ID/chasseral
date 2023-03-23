<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden border-t border-solid border-black py-8 lg:py-20' ); ?>>
	<div class="container mx-auto px-8">
		<h1 class="title-normal !mb-10"><?php the_title(); ?></h1>
		<section class="section-events-list py-8 lg:py-20">
			<?php get_template_part( 'template-parts/loops/loop', 'events' ); ?>
		</section>
	</div>
</article>