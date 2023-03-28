<section id="section-hotel-restaurant" class="section-hotel-restaurant__intro xl:h-screen grid grid-cols-1 lg:grid-rows-2">
    <?php $header_image = get_field('section_intro_header_image');
    $size = 'chasseral-jura-headers';
    $header_imgArr = wp_get_attachment_image_src( $header_image, $size ); ?>
    <div class="bg-cover bg-center h-[50vh] lg:h-full w-full hotel__header-img bg-no-repeat" style="background-image: url(<?php echo $header_imgArr[0]; ?>);"></div>
    <div class="flex justify-center h-full w-full">
        <div class="py-20 container grid grid-cols-1 lg:grid-cols-8 gap-8 justify-center p-8">
            <div class="col-span-3 mb-4">
                <h2 class="title-big"><?php the_field('section_intro_title'); ?></h2>
            </div>
            <div class="col-span-5 xl:grid xl:grid-rows-2">
                <div class="row-span-1 xl:columns-2 mb-20">
                    <p class="text-body"><?php the_field('section_intro_description'); ?></p>
                </div>
                <div class="row-span-1">
                    <a data-fancybox data-src="#open" href="javascript:;" class="btn-general btn-general--hotel is-checked"><?php echo esc_html_e( 'Jetzt Buchen', 'chasseral' ) ?></a>
                </div>
                <?php get_template_part( 'template-parts/modules/booking', 'popup' ); ?>
            </div>
        </div>
    </div>
</section>