<article id="post-<?php the_ID(); ?>" <?php post_class( 'zimmer-card grid grid-cols-1 lg:grid-cols-12 mb-20 lg:mb-24 lg:min-h-[560px] lg:ml-14 lg:gap-8' ); ?>>
	<div class="content col-start-2 col-span-3 lg:flex lg:flex-col lg:justify-between h-full px-8 lg:px-0 order-2 lg:order-1">
		<div class="details">
			<h2 class="title text-3xl text-main-green font-bold mb-10 lg:mb-20"><?php the_title(); ?></h2>
			<p class="subtitle text-2xl text-main-green font-normal mb-5 lg:mb-10">
				<?php the_field( 'subtitle' ); ?>
			</p>
			<p class="description text-sm text-main-green leading-8 tracking-wider mb-10 lg:mb-0"><?php echo get_the_excerpt(); ?></p>
		</div>
		<a class="section-btn inline-block lg:block text-sm text-center font-normal tracking-widest uppercase py-4 px-16 lg:px-0 border border-main-beige lg:w-full hover:bg-main-green hover:border-main-green hover:text-main-beige" href="<?php the_permalink(); ?>"><?php esc_html_e( 'Zu den Zimmern', 'parsberg' ); ?></a>
	</div>
	<?php
	if ( has_post_thumbnail() ) :
		?>
		<div class="image-wrapper relative mb-12 lg:mb-0 col-span-8 order-1 lg:order-2">
			<a href="<?php the_permalink(); ?>" class="group block clip-square">
				<span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green mix-blend-lighten transition-all duration-500 ease-in-out opacity-75 group-hover:opacity-10"></span>
				<img class="w-full object-cover max-h-[560px]" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
			</a>
		</div>
		<?php
	endif;
	?>
</article>
