<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden' ); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		?><div class="h-[70vh] border-b border-solid border-black bg-center bg-no-repeat bg-cover bg-fixed" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url() ); ?>)"></div>
		<?php
	endif;
	?>
	<div class="container mx-auto px-8 pt-36 pb-[20vh]">
		<div class="post-content-wrapper">
			<h1 class="text-3xl text-black font-bold mb-16"><?php the_title(); ?></h1>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>