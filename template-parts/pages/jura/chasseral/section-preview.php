<section class="chasseral-preview-section pt-40 pb-[30rem] border-t border-solid bg-no-repeat" style="background-image: url(<?php echo wp_upload_dir()['url'] . '/chasseral_illustration.svg' ?>);    background-position: 0 100%;">
    <div class="container max-w-7xl mx-auto grid grid-cols-12 border border-solid">
        <div class="col-span-5 border-r border-solid preview-img-box">
        <?php 
            $image = get_field('image');
            $size = 'chasseral-jura-preview--thumbnail'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img class="w-full" src="https://via.placeholder.com/530x575">
        <?php endif; ?>
        </div>
        <div class="col-span-7 p-20">
            <h2 class="text-black text-3xl font-bold mb-14"><?php the_field('section_preview_title'); ?></h2>
            <p class=" mb-32 leading-8"><?php the_field('section_preview_description'); ?></p>
            <a href="<?php the_field('section_preview_button_link'); ?>" class="btn-general btn-general--jura is-checked"><?php echo esc_html( 'Mehr erfahren', 'chasseral' ) ?></a>
        </div>
    </div>
</section>