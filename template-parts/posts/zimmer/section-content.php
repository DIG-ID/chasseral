<section class="zimmer-section__intro pt-8 lg:pt-20 xl:pt-40 pb-16 xl:pb-36">
	<div class="container mx-auto grid grid-cols-1 lg:gap-8 px-8 lg:grid-cols-2 max-w-7xl">
		<div class="col-span-1 row-span-1">
			<h2 class="title-normal lg:max-w-[400px]"><?php the_title(); ?></h2>
			<p class="!mb-14 text-body"><?php the_field( 'section_info_description' ); ?></p>
			<a data-fancybox data-src="#open" href="javascript:;" class="btn-general btn-general--hotel is-checked block"><?php esc_html_e( 'Jetzt buchen', 'chasseral' ); ?></a>
			<?php get_template_part( 'template-parts/modules/booking', 'popup' ); ?>
		</div>
		<div class="col-span-1 row-span-1 pt-8 lg:pt-0">
			<div class="amenities-wrapper">
				<p class="!font-bold text-body !mb-9"><?php the_field( 'section_info_price' ); ?></p>
				<ul class="list-disc no-underline mb-20 pl-4 ml-4">
					<?php
					if ( have_rows( 'section_info_amenities_list' ) ) :
						while ( have_rows( 'section_info_amenities_list' ) ) :
							the_row();
							?>
							<li class="text-body !mb-0"><?php the_sub_field( 'list_item' ); ?></li>
							<?php
						endwhile;
					endif; ?>
				</ul>
			</div>
		</div>
	</div>
	<div class="container mx-auto max-w-7xl px-8 mt-0 xl:mt-10">
		<?php do_action( 'get_archive_page', 'archives_pages_zimmer' ); ?>
	</div>
</section>
