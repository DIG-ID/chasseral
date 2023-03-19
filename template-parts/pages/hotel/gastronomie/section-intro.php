<section class="section-gastronomie__intro p-0">
    <div class="chasseral__row grid grid-cols-2">
        <div class="col-span-1 chasseral__col border-r border-solid">
            <?php 
            $image = get_field('gastronomie_block_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
        <div class="col-span-1 chasseral__col pt-24 pb-0 pl-24">
            <h2 class="text-black text-3xl font-bold mb-14"><?php the_field('gastronomie_block_title'); ?></h2>
            <p class="mb-16 leading-8 max-w-lg"><?php the_field('gastronomie_block_description'); ?></p>
        </div>
    </div>
</section>
<section class="section-hotel-restaurant__zimmer p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-2">
        <div class="col-span-1 chasseral__col pt-24 pb-0 pl-24">
            <h2 class="text-black text-3xl font-bold mb-14"><?php the_field('menus_block_title'); ?></h2>
            <p class="mb-16 leading-8 max-w-lg"><?php the_field('menus_block_description'); ?></p>
            <?php
            if( have_rows('menus_block_menu_buttons') ):
            while( have_rows('menus_block_menu_buttons') ) : the_row();
                $file = get_sub_field('menu_file');
                if( get_sub_field('label') && $file ):
                    $url = wp_get_attachment_url( $file ); ?>
                    <a href="<?php echo esc_html($url); ?>" class="btn-general btn-general--hotel block mb-7" target="_blank"><?php the_sub_field('label'); ?></a>
                <?php endif; ?>
            <?php endwhile;
            endif; ?>
        </div>
        <div class="col-span-1 chasseral__col border-l border-solid">
            <?php 
            $image = get_field('menus_block_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
    </div>
</section>