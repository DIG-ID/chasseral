<section id="section-hotel-restaurant" class="section-hotel-restaurant__intro h-screen grid grid-cols-1 grid-rows-2">
    <?php $header_image = get_field('section_intro_header_image');
    $size = 'chasseral-jura-headers';
    $header_imgArr = wp_get_attachment_image_src( $header_image, $size ); ?>
    <div class="bg-cover bg-center h-full w-full" style="background-image: url(<?php echo $header_imgArr[0]; ?>);"></div>
    <div class="flex justify-center h-full w-full">
        <div class="py-20 container grid grid-cols-8 gap-8 justify-center">
            <div class="col-span-3 mb-4">
                <h2 class="text-black text-6xl font-bold uppercase"><?php the_field('section_intro_title'); ?></h2>
            </div>
            <div class="col-span-5 grid grid-rows-2">
                <div class="row-span-1 columns-2 mb-20">
                    <p class="text-black text-sm font-normal leading-7"><?php the_field('section_intro_description'); ?></p>
                </div>
                <div class="row-span-1">
                    <a href="#" class="btn-general btn-general--hotel is-checked"><?php echo esc_html( 'Jetzt Buchen', 'chasseral' ) ?></a>
                </div>
            </div>
        </div>
    </div>
</section>