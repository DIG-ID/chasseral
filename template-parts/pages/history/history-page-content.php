<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	if ( has_post_thumbnail() ) :
		?><div class="h-[70vh] border-b border-solid border-black bg-center bg-no-repeat bg-cover bg-fixed" style="background-image: url(<?php echo esc_url( get_the_post_thumbnail_url() ); ?>)"></div>
		<?php
	endif;
	?>
	<div class="container mx-auto px-8 pt-36 pb-[20vh]">

		<h1 class="text-3xl text-black text-center font-bold mb-36"><?php the_field( 'history_title' ); ?></h1>
		<?php
		if ( have_rows( 'history_blocks' ) ):

			while ( have_rows( 'history_blocks' ) ) :
				the_row();
				$block_image = get_sub_field( 'image' );
				$block_text  = get_sub_field( 'description' );
				?>
				<div class="block-wrapper grid grid-cols-12 gap-5 items-center mb-36">
					<div class="block-image col-span-6">
						<img class="w-full h-auto object-cover" src="<?php echo esc_url( wp_get_attachment_image_url( $block_image, 'full' ) ); ?>" alt="<?php echo esc_html( wp_get_attachment_caption( $block_image ) ); ?>">
					</div>
					<div class="block-content col-span-4 col-start-8">
						<?php echo $block_text; ?>
					</div>
				</div>
				<?php
			endwhile;
		endif;
		?>
		<div class="history-gallery">
			<?php
			$history_gallery = get_field( 'gallery' );
			if ( $history_gallery ) :
				echo '<div class="swiper history-swiper"><div class="swiper-wrapper">';
				foreach ( $history_gallery as $image ) :
					echo '<div class="swiper-slide">';
					echo '<a href="' . esc_url( wp_get_attachment_image_url( $image, 'full' ) ) . '" data-fancybox="history-gallery" data-caption="' . esc_html( wp_get_attachment_caption( $image ) ) . '" ><img class="w-full h-auto object-cover max-h-[700px]" src="' . esc_url( wp_get_attachment_image_url( $image, 'full' ) ) . '"></a>';
					echo '</div>';
				endforeach;
				echo '<div class="swiper-button-prev history-button-prev"></div>';
				echo '<div class="swiper-button-next history-button-next"></div>';
				echo '</div></div>';
			endif;
			?>
		</div>
	</div>
</article>