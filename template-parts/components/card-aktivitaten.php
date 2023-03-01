<article id="post-<?php the_ID(); ?>" <?php post_class( 'flex flex-col mb-14' ); ?>>
	<?php
	$btn = get_field( 'aktivitaten_button' );
	if ( has_post_thumbnail() ) :
		$url = '';
		if ( $btn ) :
			$url = $btn['url'];
		endif;
		?>
		<div class="image-wrapper mb-5 overflow-hidden">
			<a href="<?php echo esc_url( $url ); ?>" class="block relative group">
				<span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten transition-all duration-700 ease-in-out group-hover:bg-main-beige/75 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="5.143" height="8.871" class="block opacity-0 scale-0 bg-darker-green rounded-full transition-all duration-700 ease-in-out group-hover:opacity-100 group-hover:scale-100"><g fill="none" stroke="#cba884" stroke-linecap="round"><path d="m.707.707 3.728 3.728"/><path d="M4.436 4.435.708 8.163"/></g></svg></span>
				<img class="w-full object-cover transition-all duration-700 ease-in-out group-hover:scale-125" src="<?php the_post_thumbnail_url( 'activity-thumb' ); ?>" alt="<?php the_post_thumbnail_caption(); ?>">
			</a>
		</div>
		<?php
	else :
		?>
		<div class="image-wrapper mb-5 overflow-hidden">
			<a href="<?php echo esc_url( $url ); ?>" class="block relative group">
				<span class="overlay absolute top-0 left-0 right-0 bottom-0 bg-main-green/75 mix-blend-lighten transition-all duration-700 ease-in-out group-hover:bg-main-beige/75 flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="5.143" height="8.871" class="block opacity-0 scale-0 bg-darker-green rounded-full transition-all duration-700 ease-in-out group-hover:opacity-100 group-hover:scale-100"><g fill="none" stroke="#cba884" stroke-linecap="round"><path d="m.707.707 3.728 3.728"/><path d="M4.436 4.435.708 8.163"/></g></svg></span>
				<img class="w-full object-cover transition-all duration-700 ease-in-out group-hover:scale-125" src="https://via.placeholder.com/450x450">
			</a>
		</div>
		<?php
	endif;
	?>
	<div class="content">
		<h3 class="text-sm text-main-green font-semibold uppercase mb-5"><?php the_title(); ?></h3>
		<div class="lg:min-h-[60px] mb-3">
			<?php if ( get_field( 'aktivitaten_distance' ) ) : ?>
				<p class="text-sm text-main-green mb-3"><span class="font-semibold"><?php esc_html_e( 'Distanz: ', 'parsberg' ); ?></span><?php the_field( 'aktivitaten_distance' ); ?></p>
			<?php endif; ?>
			<?php if ( get_field( 'aktivitaten_travel_time_approx' ) ) : ?>
				<p class="text-sm text-main-green"><span class="font-semibold"><?php esc_html_e( 'Fahrzeit ca.: ', 'parsberg' ); ?></span><?php the_field( 'aktivitaten_travel_time_approx' ); ?></p>
			<?php endif; ?>
		</div>
		<p class="text-sm text-main-green leading-8 tracking-wider mb-7"><?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?></p>
		<?php
		if ( $btn ) :
			$btn_url    = $btn['url'];
			$btn_title  = $btn['title'];
			$btn_target = $btn['target'] ? $btn['target'] : '_self';
			?>
			<a class="text-sm font-semibold tracking-wider uppercase transition-all duration-500 ease-in-out flex items-center hover:text-main-beige" href="<?php echo esc_url( $btn_url ); ?>" target="<?php echo esc_attr( $btn_target ); ?>"><?php echo esc_html( $btn_title ); ?><svg xmlns="http://www.w3.org/2000/svg" width="5.143" height="8.871" class="ml-2"><g fill="none" stroke="#cba884" stroke-linecap="round" data-name="Grupo 99"><path d="m.707.707 3.728 3.728" data-name="Linha 36"/><path d="M4.436 4.435.708 8.163" data-name="Linha 37"/></g></svg></a>
			<?php
		endif;
		?>
	</div>
</article>
