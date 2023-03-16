<section class="section-hotel-restaurant__bankette p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-2">
        <div class="col-span-1 chasseral__col pt-24 pb-0 pl-24">
            <h2 class="text-black text-3xl font-bold mb-14"><?php the_field('section_bankette_title'); ?></h2>
            <p class="mb-16 leading-8 max-w-lg"><?php the_field('section_bankette_description'); ?></p>
            <a href="#" class="btn-general btn-general--hotel"><?php echo esc_html( 'mehr erfahren', 'chasseral' ) ?></a>
        </div>
        <div class="col-span-1 chasseral__col">
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