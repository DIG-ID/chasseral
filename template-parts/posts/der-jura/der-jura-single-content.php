<article id="post-<?php the_ID(); ?>" <?php post_class( 'overflow-hidden' ); ?>>
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
			<a href="<?php echo esc_url( get_permalink( get_field( 'archives_pages_der_jura', 'options' ) ) ); ?>" class="inline-block mt-10">
				<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mr-2">
					<path d="M10.9885 9.6065e-07L12.9458 1.925L5.25385 9.625L21.977 9.625L21.977 12.375L5.25385 12.375L12.9458 20.075L10.9885 22L-5.81821e-05 11L10.9885 9.6065e-07Z" fill="#9C9C9C"/>
				</svg>
				<span class="text-sm text-[#9C9C9C]"><?php esc_html_e( 'Zurück zur Übersicht ', 'chasseral' ); ?></span>
			</a>
		</div>
	</div>
</article>