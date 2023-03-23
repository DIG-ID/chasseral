<section class="chasseral-list-section p-0">
    <?php
        if( have_rows('section_chasseral') ):
            while( have_rows('section_chasseral') ) : the_row(); ?>
            <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
                <div class="col-span-1 chasseral__col odd:border-r  border-b border-solid">
                    <?php 
                    $image = get_sub_field('image');
                    $size = 'chasseral-page--thumbnail'; 
                    if( $image ) :
                        echo wp_get_attachment_image( $image, $size );
                    else : ?>
                    <img src="https://via.placeholder.com/960x1056">
                    <?php endif; ?>
                </div>
                <div class="col-span-1 chasseral__col p-8 lg:pt-24 lg:pb-0 lg:pl-24 border-b even:border-r border-solid ">
                    <h2 class="title-normal"><?php the_sub_field('title'); ?></h2>
                    <p class="text-body max-w-lg"><?php the_sub_field('description'); ?></p>
                </div>
            </div>
            <?php endwhile;
        endif; 
    ?>
</section>