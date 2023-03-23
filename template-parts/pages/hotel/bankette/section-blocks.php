<section class="section-bankette__zvieri p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 chasseral__col p-8 lg:pt-36 lg:pb-0 lg:pl-36 lg:border-r border-solid">
            <h2 class="title-normal"><?php the_field('section_zvieri_title'); ?></h2>
            <p class="text-body !mb-16 max-w-lg"><?php the_field('section_zvieri_description'); ?></p>
        </div>
        <div class="col-span-1 chasseral__col">
            <?php 
            $image = get_field('section_zvieri_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="section-bankette__familienfeier p-0 border-t border-solid">
    <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 chasseral__col lg:border-r border-solid">
            <?php 
            $image = get_field('section_familienfeier_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
        <div class="col-span-1 chasseral__col p-8 lg:pt-36 lg:pb-0 lg:pl-36">
            <h2 class="title-normal"><?php the_field('section_familienfeier_title'); ?></h2>
            <p class="text-body !mb-16 max-w-lg"><?php the_field('section_familienfeier_description'); ?></p>
        </div>
    </div>
</section>