<section class="section-hotel-restaurant__your-stay py-24 lg:py-40 lg:border-t border-solid">
    <div class="container mx-auto max-w-7xl">
        <div class="flex justify-center">
            <h2 class="title-normal !mb-24"><?php the_field('section_specials_title'); ?></h2>
        </div>
        <div class="specials__wrapper">
        <?php
        if( have_rows('section_specials_specials') ):
        while( have_rows('section_specials_specials') ) : the_row(); ?>
            <div class="grid grid-cols-1 lg:grid-cols-2 mb-8 lg:mb-40">
                <div class="col-span-1 border border-solid gastro__images">
                <?php 
                $image = get_sub_field('image');
                $size = 'perfekt-fur-thumbnail'; 
                if( $image ) :
                    echo wp_get_attachment_image( $image, $size );
                else : ?>
                    <img src="https://via.placeholder.com/640x470">
                <?php endif; ?>
                </div>
                <div class="col-span-1 p-8 lg:pt-32 lg:px-24">
                    <p class="font-bold text-xl mb-8"><?php the_sub_field('title'); ?></p>
                    <p class="!font-bold text-body !mb-4"><?php the_sub_field('subtitle'); ?></p>
                    <ul class="list-disc no-underline mb-20 pl-4">
                    <?php
                    if( have_rows('list') ):
                    while( have_rows('list') ) : the_row(); ?>
                        <li class="text-body"><?php the_sub_field('list_item'); ?></li>
                    <?php endwhile;
                    endif; ?>
                    </ul>
                    <p class="text-body"><?php the_sub_field('additional_info'); ?></p>
                </div>
            </div>
        <?php endwhile;
        endif; ?>
        </div> 
    </div>
</section>