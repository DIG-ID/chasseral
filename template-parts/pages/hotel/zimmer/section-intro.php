<section class="section-zimmer__intro pt-8 lg:pt-20 pb-20 lg:pb-40 border-t border-solid border-black">
	<div class="container grid grid-cols-1 lg:grid-cols-3 p-8 lg:p-0 gap-16 mx-auto">
		<div class="col-span-1">
			<h2 class="title-big"><?php the_title(); ?></h2>
		</div>
		<div class="col-span-2 lg:grid-rows-2">
				<div class="lg:columns-2 row-span-1 mb-16 gap-8">
					<p class="text-body"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
				</div>
				<div class="row-span-1">
					<a data-fancybox data-src="#open" href="javascript:;" class="btn-general btn-general--hotel is-checked block"><?php esc_html_e( 'Jetzt buchen', 'chasseral' ); ?></a>
				</div>
				<?php get_template_part( 'template-parts/modules/booking', 'popup' ); ?>
		</div>
	</div>
</section>