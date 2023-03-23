<?php if ( get_field('section_preview_title') ) : ?>
<section class="chasseral-preview-section py-8 lg:py-40">
    <div class="container max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-12 lg:border border-solid">
        <div class="col-span-5 border-r border-solid preview-img-box">
        <?php 
            $image = get_field('section_preview_image');
            $size = 'chasseral-jura-preview--thumbnail'; 
            if( $image ) :
                echo wp_get_attachment_image( $image, $size );
            else : ?>
            <img class="w-full" src="https://via.placeholder.com/530x575">
        <?php endif; ?>
        </div>
        <div class="col-span-7 p-8 lg:p-20">
            <h2 class="title-normal !mb-14"><?php the_field('section_preview_title'); ?></h2>
            <p class=" text-body !mb-32"><?php the_field('section_preview_description'); ?></p>
            <a href="<?php the_field('section_preview_button_link'); ?>" class="btn-general btn-general--jura is-checked"><?php echo esc_html( 'Mehr erfahren', 'chasseral' ) ?></a>
        </div>
    </div>
</section>
<?php endif; ?>