<section class="section-hotel-restaurant__bankette p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 chasseral__col p-8 lg:pt-24 lg:pb-0 lg:pl-24">
            <h2 class="text-black text-3xl font-bold mb-8 lg:mb-14"><?php the_field('section_bankette_title'); ?></h2>
            <p class="mb-16 leading-8 max-w-lg"><?php the_field('section_bankette_description'); ?></p>
            <?php $bankette_page = get_permalink( get_page_by_path('hotel-restaurant/bankette-gruppen') -> ID ); ?>
            <a href="<?php echo $bankette_page; ?>" class="btn-general btn-general--hotel"><?php echo esc_html( 'mehr erfahren', 'chasseral' ) ?></a>
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