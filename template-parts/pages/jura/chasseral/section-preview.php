<section class="chasseral-preview-section pt-0 xl:pt-40 pb-40 lg:pb-[20rem] xl:pb-[30rem] bg-no-repeat" style="background-image: url(<?php echo wp_upload_dir()['url'] . '/chasseral_illustration.svg' ?>); background-position: 0 100%;background-size:contain;">
    <div class="container max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 xl:border lg:border-b border-solid">
        <div class="col-span-5 border-r border-solid preview-img-box hidden lg:block">
        <?php 
            $image = get_field('section_preview_image');
            $size = 'chasseral-jura-preview--thumbnail';
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img class="w-full" src="https://via.placeholder.com/530x575">
        <?php endif; ?>
        </div>
        <div class="col-span-7 p-8 xl:p-20">
            <h2 class="title-normal"><?php the_field('section_preview_title'); ?></h2>
            <p class="mb-8 md:mb-16 xl:mb-32 text-black text-sm font-normal leading-8"><?php the_field('section_preview_description'); ?></p>
            <a href="<?php the_field('section_preview_button_link'); ?>" class="btn-general btn-general--jura is-checked"><?php echo esc_html_e( 'Mehr erfahren', 'chasseral' ) ?></a>
        </div>
    </div>
</section>