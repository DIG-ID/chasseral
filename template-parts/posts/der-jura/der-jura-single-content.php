<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden border-t border-solid border-black' ); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		?><div class="h-[80vh] border-b border-solid border-black bg-center bg-no-repeat bg-cover bg-fixed" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>)"></div>
		<?php
	endif;
	?>
	<div class="container mx-auto px-8 py-36">
		<div class="post-content-wrapper">
			<h1 class="title-normal"><?php the_title(); ?></h1>
			<div class="post-content">
				<?php the_content(); ?>
			</div> 
			<?php do_action( 'get_archive_page', 'archives_pages_der_jura' ); ?>
		</div>
	</div>
</article>