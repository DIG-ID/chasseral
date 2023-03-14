<section class="chasseral-list-section p-0">
    <?php
        if( have_rows('section_chasseral') ):
            while( have_rows('section_chasseral') ) : the_row(); ?>
            <div class="chasseral__row grid grid-cols-2">
                <div class="col-span-1 chasseral__col">
                    <?php 
                    $image = get_sub_field('image');
                    $size = 'chasseral-page--thumbnail'; 
                    if( $image ) :
                        echo wp_get_attachment_image( $image, $size );
                    else : ?>
                    <img src="https://via.placeholder.com/960x1056">
                    <?php endif; ?>
                </div>
                <div class="col-span-1 chasseral__col pt-24 pb-0 pl-24">
                    <h2 class="text-black text-3xl font-bold mb-14"><?php the_sub_field('title'); ?></h2>
                    <p class="mb-8 leading-8 max-w-lg"><?php the_sub_field('description'); ?></p>
                </div>
            </div>
            <?php endwhile;
        endif; 
    ?>
</section>