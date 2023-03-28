<section class="section-hotel-restaurant__your-stay px-8 py-8 lg:px-20 lg:py-20 xl:py-40 border-t border-solid">
    <div class="container grid grid-cols-1 lg:grid-cols-3 gap-16 mx-auto lg:p-0">
        <div class="col-span-1">
            <h2 class="title-big"><?php the_field('section_your_stay_title'); ?></h2>
            <p class="text-black text-2xl lg:text-3xl"><?php the_field('section_your_stay_subtitle'); ?></p>
        </div>
        <div class="col-span-2 grid-rows-2">
            <div class="row-span-1 grid grid-cols-1 xl:grid-cols-2 lg:gap-8 mb-8 lg:mb-16">
                <div class="col-span-1">
                    <p class="text-body"><?php the_field('section_your_stay_description'); ?></p>
                </div>
                <div class="col-span-1">
                    <p class="text-body"><?php the_field('section_your_stay_description_right'); ?></p>
                </div>
            </div>
            <div class="row-span-1">
                <a data-fancybox data-src="#open" href="javascript:;" class="btn-general btn-general--hotel is-checked block"><?php echo esc_html_e( 'Jetzt buchen', 'chasseral' ) ?></a>
            </div>
        </div>
    </div>
</section>