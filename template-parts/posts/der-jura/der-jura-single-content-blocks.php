<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		?><div class="h-[80vh] border-b border-solid border-black bg-center bg-no-repeat bg-cover bg-fixed" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url() ); ?>)"></div>
		<?php
	endif;
	?>
	<div class="container mx-auto px-8 py-36">
		<h1 class="title-normal mb-36"><?php the_field( 'history_title' ); ?></h1>
		<?php
		if ( have_rows( 'blocks' ) ) :

			while ( have_rows( 'blocks' ) ) :
				the_row();
				$block_image = get_sub_field( 'image' );
				$block_title = get_sub_field( 'title' );
				$block_text  = get_sub_field( 'description' );
				?>
				<div class="block-wrapper grid grid-cols-12 gap-5 items-center mb-36">
					<div class="block-image col-span-6">
						<img class="w-full h-auto object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $block_image, 'full' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $block_image ) ); ?>">
					</div>
					<div class="block-content col-span-4 col-start-8">
						<h2 class="title-normal"><?php echo $block_title; ?></h2>
						<?php echo $block_text; ?>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
		<?php do_action( 'get_archive_page', 'archives_pages_der_jura' ); ?>
	</div>
</article>