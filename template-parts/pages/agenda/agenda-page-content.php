<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden pt-8 pb-0 lg:pb-8 xl:pb-20' ); ?>>
	<div class="container mx-auto px-8">
		<h1 class="title-normal !mb-0"><?php the_title(); ?></h1>
		<section class="section-agenda-list py-8 lg:py-20">
			<?php get_template_part( 'template-parts/loops/loop', 'agenda' ); ?>
		</section>
	</div>
</article>