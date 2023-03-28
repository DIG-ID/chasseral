<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden border-t border-solid border-black' ); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		?><div class="h-[40vh] lg:h-[80vh] border-b border-solid border-black bg-center bg-no-repeat bg-cover bg-fixed" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>)"></div>
		<?php
	endif;
	?>
	<div class="container mx-auto p-8 lg:py-16 xl:py-36">
		<div class="post-content-wrapper">
			<h1 class="title-normal"><?php the_title(); ?></h1>
			<div class="post-content">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</article>