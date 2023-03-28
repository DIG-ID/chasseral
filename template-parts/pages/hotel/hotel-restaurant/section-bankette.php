<section class="section-hotel-restaurant__bankette p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 chasseral__col p-8 lg:p-16 xl:pt-24 xl:pb-16 xl:pl-24">
            <h2 class="title-normal"><?php the_field('section_bankette_title'); ?></h2>
            <p class="text-body !mb-16 max-w-lg"><?php the_field('section_bankette_description'); ?></p>
            <?php $bankette_page = get_permalink( get_page_by_path('hotel-restaurant/bankette-gruppen') -> ID ); ?>
            <a href="<?php echo $bankette_page; ?>" class="btn-general btn-general--hotel"><?php echo esc_html_e( 'mehr erfahren', 'chasseral' ) ?></a>
        </div>
        <div class="col-span-1 chasseral__col border-l border-solid">
            <?php 
            $image = get_field('section_bankette_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
    </div>
</section>