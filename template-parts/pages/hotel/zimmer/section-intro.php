<section class="section-zimmer__intro pt-8 pb-16 lg:py-16 xl:pt-20 xl:pb-40">
	<div class="container grid grid-cols-1 lg:grid-cols-3 p-8 lg:px-16 xl:p-0 lg:gap-16 mx-auto">
		<div class="col-span-1">
			<h2 class="title-big"><?php the_title(); ?></h2>
		</div>
		<div class="col-span-2 lg:grid-rows-2">
				<div class="row-span-1 mb-16 gap-8">
					<?php echo wp_kses_post( get_the_content() ); ?>
				</div>
				<div class="row-span-1">
					<a href="https://u86ev3bgmql.preview.infomaniak.website/" target="_blank" class="btn-general btn-general--hotel is-checked block"><?php esc_html_e( 'Jetzt buchen', 'chasseral' ); ?></a>
				</div>
		</div>
	</div>
</section>