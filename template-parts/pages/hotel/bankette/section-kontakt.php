<section class="section-bankette_kontakt py-16 px-8 xl:px-0 xl:py-40 border-t border-solid">
    <div class="container mx-auto max-w-7xl lg:px-8">
        <h2 class="title-normal !mb-4"><?php the_field('section_kontakt_title'); ?></h2>
    </div>
    <div class="container grid grid-cols-1 lg:grid-cols-12 gap-4 lg:gap-16 mx-auto max-w-7xl lg:p-8">
        <div class="col-span-5">
            <p class="text-body"><?php the_field('section_kontakt_description'); ?></p>
        </div>
        <div class="col-span-2"></div>
        <div class="col-span-5">
            <div><?php $kontakt_page = get_permalink( get_page_by_path('kontakt-anreise') -> ID ); ?>
                <a href="<?php echo $kontakt_page; ?>" class="btn-general btn-general--hotel block"><?php echo esc_html_e( 'Kontakt', 'chasseral' ) ?></a>
            </div>
        </div>
    </div>
</section>