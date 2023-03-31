<section class="section-gastronomie__intro p-0">
	<div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
		<div class="col-span-1 chasseral__col border-r border-solid">
			<?php
			$image = get_field( 'gastronomie_block_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'section-column-img' );
			else :
				echo '<img src="https://via.placeholder.com/961x706">';
			endif;
			?>
		</div>
		<div class="col-span-1 chasseral__col p-8 lg:pt-24 lg:pb-0 lg:pl-24">
			<h2 class="title-normal"><?php the_field( 'gastronomie_block_title' ); ?></h2>
			<p class="text-body !mb-16 max-w-lg"><?php the_field( 'gastronomie_block_description' ); ?></p>
		</div>
	</div>
</section>
<section class="section-hotel-restaurant__zimmer p-0 border-t border-solid">
	<div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
		<div class="col-span-1 chasseral__col p-8 lg:pt-24 lg:pb-0 lg:pl-24 border-r border-solid">
			<h2 class="title-normal"><?php the_field( 'menus_block_title' ); ?></h2>
			<p class="text-body !mb-16 max-w-lg"><?php the_field( 'menus_block_description' ); ?></p>
			<?php
			if ( have_rows( 'menus_block_menu_buttons' ) ) :
				while ( have_rows( 'menus_block_menu_buttons' ) ) :
					the_row();
					$file = get_sub_field( 'menu_file' );
					if ( get_sub_field( 'label' ) && $file ) :
						$url = wp_get_attachment_url( $file );
						?>
						<a href="<?php echo esc_url( $url ); ?>" class="btn-general btn-general--hotel block mb-7" target="_blank"><?php the_sub_field( 'label' ); ?></a>
						<?php
					endif;
				endwhile;
			endif;
			?>
		</div>
		<div class="col-span-1 chasseral__col">
			<?php
			$image = get_field( 'menus_block_image' );
			if ( $image ) :
				echo wp_get_attachment_image( $image, 'section-column-img' );
			else :
				echo '<img src="https://via.placeholder.com/961x706">';
			endif;
			?>
		</div>
	</div>
</section>