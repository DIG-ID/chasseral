<section class="section-at-glance lg:container mx-auto pb-28 px-8 xl:px-0">
	<h2 class="text-xl lg:text-2xl font-bold mb-10 lg:mb-20"><?php the_field( 'at_glance_title' ); ?></h2>
	<div class="grid grid-cols-1 lg:grid-cols-2">
		<div class="col-span-1">
			<h3 class="flex items-center text-sm text-main-green font-semibold tracking-wider uppercase mb-10 lg:mb-20"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'at_glance_included_services_title' ); ?></h3>
			<?php
			if ( have_rows( 'at_glance_included_services_items' ) ) :
				echo '<ul class="mb-10 lg:mb-0">';
				while ( have_rows( 'at_glance_included_services_items' ) ) :
					the_row();
					$text = get_sub_field( 'item' );
					echo '<li class="text-sm leading-8 tracking-wider flex items-center"><span class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="5.143" height="8.871"><g fill="none" stroke="#cba884" stroke-linecap="round" data-name="Grupo 99"><path d="m.707.707 3.728 3.728" data-name="Linha 36"/><path d="M4.436 4.435.708 8.163" data-name="Linha 37"/></g></svg></span> ' . $text . '</li>';
				endwhile;
				echo '</ul>';
			endif;
			?>
		</div>
		<div class="col-span-1">
			<h3 class="flex items-center text-sm text-main-green font-semibold tracking-wider uppercase mb-10 lg:mb-20"><span class="block w-20 h-px bg-main-green mr-5"></span><?php the_field( 'at_glance_in_addition_title' ); ?></h3>
			<?php
			if ( have_rows( 'at_glance_in_addition_items' ) ) :
				echo '<ul class="">';
				while ( have_rows( 'at_glance_in_addition_items' ) ) :
					the_row();
					$text = get_sub_field( 'item' );
					echo '<li class="text-sm leading-8 tracking-wider flex items-center"><span class="mr-4"><svg xmlns="http://www.w3.org/2000/svg" width="5.143" height="8.871"><g fill="none" stroke="#cba884" stroke-linecap="round" data-name="Grupo 99"><path d="m.707.707 3.728 3.728" data-name="Linha 36"/><path d="M4.436 4.435.708 8.163" data-name="Linha 37"/></g></svg></span> ' . $text . '</li>';
				endwhile;
				echo '</ul>';
			endif;
			?>
		</div>

	</div>
</section>
