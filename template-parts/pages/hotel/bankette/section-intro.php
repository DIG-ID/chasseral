<section class="section-bankette__intro p-0">
    <div class="chasseral__row grid grid-cols-1 lg:grid-cols-2">
        <div class="col-span-1 chasseral__col border-r border-solid">
            <?php 
            $image = get_field('section_intro_image');
            $size = 'section-column-img'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img src="https://via.placeholder.com/961x706">
            <?php endif; ?>
        </div>
        <div class="col-span-1 chasseral__col p-8 lg:pt-24 lg:pb-0 lg:pl-24">
            <h2 class="text-black text-3xl font-bold mb-14 uppercase"><?php the_field('section_intro_title'); ?></h2>
            <p class="mb-16 leading-8 max-w-lg"><?php the_field('section_intro_description'); ?></p>
            <?php
            if( have_rows('section_intro_button_list') ):
            while( have_rows('section_intro_button_list') ) : the_row();
                $file = get_sub_field('file');
                if( get_sub_field('label') && $file ):
                    $url = wp_get_attachment_url( $file ); ?>
                    <a href="<?php echo esc_html($url); ?>" class="btn-general btn-general--hotel block mb-7" target="_blank"><span class="mr-2"><?php the_sub_field('label'); ?></span>
                    <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline">
                        <path d="M12 5.29412H8.57143V0H3.42857V5.29412H0L6 11.4706L12 5.29412ZM0 13.2353V15H12V13.2353H0Z" fill="black"/>
                    </svg>
                    </a>
                <?php endif; ?>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</section>