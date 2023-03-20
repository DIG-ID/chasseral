<section id="section-topofjura" class="section-topofjura__intro h-screen grid grid-cols-1 grid-rows-2">
    <?php $header_image = get_field('section_intro_header_image');
    $size = 'chasseral-jura-headers';
    $header_imgArr = wp_get_attachment_image_src( $header_image, $size ); ?>
    <div class="bg-cover bg-center h-full w-full" style="background-image: url(<?php echo $header_imgArr[0]; ?>);"></div>
    <div class="flex justify-center h-full w-full bg-no-repeat" style="background-image: url(<?php echo wp_upload_dir()['url'] . '/jura_illustration.svg' ?>);    background-position: 0 105%;">
        <div class="py-20 container grid grid-cols-3 justify-center">
            <div class="mb-4">
                <h2 class="text-black text-6xl font-bold uppercase"><?php the_field('section_intro_title'); ?></h2>
            </div>
            <div>
                <p class="text-black text-sm font-normal leading-7"><?php the_field('section_intro_description'); ?></p>
            </div>
        </div>
    </div>
</section>