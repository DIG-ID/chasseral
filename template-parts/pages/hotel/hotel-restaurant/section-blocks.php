<section class="section-hotel-restaurant__culinary p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 chasseral__col p-8 lg:p-16 xl:pt-24 xl:pb-16 xl:pl-24 border-r border-solid">
            <h2 class="title-normal !mb-14"><?php the_field('section_blocks_culinary_title'); ?></h2>
            <p class="text-body !mb-16 max-w-lg"><?php the_field('section_blocks_culinary_description'); ?></p>
            <?php $cul_page = get_permalink( get_page_by_path('hotel-restaurant/gastronomie') -> ID ); ?>
            <a href="<?php echo $cul_page; ?>" class="btn-general btn-general--hotel"><?php echo esc_html_e( 'mehr erfahren', 'chasseral' ) ?></a>
        </div>
        <div class="col-span-1 chasseral__col">
            <?php 
            $image = get_field('section_blocks_culinary_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="section-hotel-restaurant__zimmer p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 chasseral__col border-r border-solid order-2 lg:order-1">
            <?php 
            $image = get_field('section_blocks_zimmer_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
        <div class="col-span-1 chasseral__col p-8 lg:p-16 xl:pt-24 xl:pb-16 xl:pl-24 order-1 lg:order-2">
            <h2 class="title-normal !mb-14"><?php the_field('section_blocks_zimmer_title'); ?></h2>
            <p class="text-body !mb-16 max-w-lg"><?php the_field('section_blocks_zimmer_description'); ?></p>
            <?php $zimmer_page = get_permalink( get_page_by_path('hotel-restaurant/zimmer') -> ID ); ?>
            <a href="<?php echo $zimmer_page; ?>" class="btn-general btn-general--hotel"><?php echo esc_html_e( 'Zu den zimmern', 'chasseral' ) ?></a>
        </div>
    </div>
</section>