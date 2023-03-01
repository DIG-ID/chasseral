<section class="section-services grid grid-col-1 lg:grid-cols-12 pt-20 lg:pt-36 pb-20 px-8 lg:px-0">
	<div class="services-content col-span-1 lg:col-start-2 lg:col-span-5 lg:ml-12 order-2 lg:order-1">
		<h2 class="title text-3xl font-bold text-main-green mb-12"><?php the_field( 'services_section_title', 'option' ); ?></h2>
		<p class="description text-main-green text-sm leading-8 tracking-wider mb-14"><?php the_field( 'services_section_description' ); ?></p>
		<?php
		if ( have_rows( 'services_section_services_list', 'options' ) ) :
			echo '<ul class="list mb-10 lg:mb-20">';
			while ( have_rows( 'services_section_services_list', 'options' ) ) :
				the_row();
				$text = get_sub_field( 'service_name' );
				echo '<li class="list__item text-main-green text-sm leading-8 tracking-wider flex items-center mb-5 lg:mb-0"><span class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="5.143" height="8.871"><g fill="none" stroke="#cba884" stroke-linecap="round" data-name="Grupo 99"><path d="m.707.707 3.728 3.728" data-name="Linha 36"/><path d="M4.436 4.435.708 8.163" data-name="Linha 37"/></g></svg></span>' . $text . '</li>';
			endwhile;
			echo '</ul>';
		endif;
		?>
		<a href="<?php the_field( 'services_section_button_url', 'option' ); ?>" class="section-btn inline-block text-sm text-center font-normal tracking-widest uppercase py-4 px-16 border border-main-beige hover:bg-main-green hover:border-main-green hover:text-main-beige"><?php the_field( 'services_section_button_name', 'option' ); ?></a>
	</div>
	<?php
	$image = get_field( 'services_section_image', 'option' );
	if ( ! empty( $image ) ) :
		echo '<div class="image-wrapper col-span-1 lg:col-span-6 relative order-1 lg:order-2 mb-12 lg:mb-0"><span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten"></span><img class="w-full object-cover max-h-[650px]" src="' . esc_url( $image['url'] ) . '" alt="' . esc_attr( $image['alt'] ) . '" /></div>';
	endif;
	?>
</section>
