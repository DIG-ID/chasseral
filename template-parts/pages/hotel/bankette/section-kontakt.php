<section class="section-bankette_kontakt py-16 lg:py-40 border-t border-solid">
    <div class="container mx-auto max-w-7xl px-8">
        <h2 class="text-black text-3xl font-bold mb-4"><?php the_field('section_kontakt_title'); ?></h2>
    </div>
    <div class="container grid grid-cols-1 lg:grid-cols-12 gap-16 mx-auto max-w-7xl p-8">
        <div class="col-span-5">
            <p class="mb-8 leading-8"><?php the_field('section_kontakt_description'); ?></p>
        </div>
        <div class="col-span-2"></div>
        <div class="col-span-5">
            <div><?php $kontakt_page = get_permalink( get_page_by_path('kontakt-anreise') -> ID ); ?>
                <a href="<?php echo $kontakt_page; ?>" class="btn-general btn-general--hotel block"><?php echo esc_html( 'Kontakt', 'chasseral' ) ?></a>
            </div>
        </div>
    </div>
</section>