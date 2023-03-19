<section class="zimmer-section__intro pt-40 pb-60">
	<div class="container mx-auto grid grid-cols-1 lg:gap-8 px-8 lg:grid-cols-2 max-w-7xl">
		<div class="col-span-1 row-span-1">
            <h2 class="text-black text-3xl font-bold uppercase mb-14"><?php the_title(); ?></h2>
            <p class="mb-14 leading-8"><?php the_field('section_info_description'); ?></p>
            <a href="#" class="btn-general btn-general--hotel is-checked block"><?php echo esc_html( 'Jetzt buchen', 'chasseral' ) ?></a>
        </div>
        <div class="col-span-1 row-span-1">
            <div class="amenities-wrapper">
                <p class="font-bold leading-8 mb-9"><?php the_field('section_info_price'); ?></p>
                <ul class="list-disc no-underline mb-20 pl-4 ml-4">
                <?php
                if( have_rows('section_info_amenities_list') ):
                    while( have_rows('section_info_amenities_list') ) : the_row(); ?>
                    <li class="font-normal leading-8 text-base"><?php the_sub_field('list_item'); ?></li>
                <?php endwhile;
                endif; ?>
                </ul>
            </div>
        </div>
	</div>
    <div class="container mx-auto max-w-7xl px-8">
            <?php $page = get_permalink( get_page_by_path('hotel-restaurant/zimmer') -> ID ); ?>
            <a href="<?php echo $page; ?>">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mr-2">
                    <path d="M10.9885 9.6065e-07L12.9458 1.925L5.25385 9.625L21.977 9.625L21.977 12.375L5.25385 12.375L12.9458 20.075L10.9885 22L-5.81821e-05 11L10.9885 9.6065e-07Z" fill="#9C9C9C"/>
                </svg>
                <span class="text-sm text-[#9C9C9C]"><?php echo esc_html( 'Zurück zur Übersicht', 'chasseral' ) ?></span>
            </a>
    </div>
</section>
