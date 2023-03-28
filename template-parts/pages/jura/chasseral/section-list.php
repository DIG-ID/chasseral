<section class="chasseral-list-section p-0 border-t border-solid border-block">
	<?php
	if ( have_rows( 'section_chasseral' ) ) :
		while ( have_rows( 'section_chasseral' ) ) :
			the_row();
			?>
			<div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
				<div class="col-span-1 chasseral__col odd:border-r border-b border-solid order-2 lg:order-1">
					<?php
					$image = get_sub_field( 'image' );
					if ( $image ) :
							echo wp_get_attachment_image( $image, 'chasseral-page--thumbnail' );
					else :
						echo '<img src="https://via.placeholder.com/960x1056">';
					endif;
					?>
				</div>
				<div class="col-span-1 chasseral__col p-8 md:pt-12 xl:pt-24 md:pb-8 xl:pb-0 md:pl-12 xl:pl-24 border-b even:border-r border-solid order-1 lg:order-2">
					<h2 class="title-normal"><?php the_sub_field( 'title' ); ?></h2>
					<p class="text-body max-w-lg"><?php the_sub_field( 'description' ); ?></p>
				</div>
			</div>
		<?php
		endwhile;
	endif;
	?>
</section>