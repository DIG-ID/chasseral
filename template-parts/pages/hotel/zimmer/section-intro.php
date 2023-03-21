<section class="section-zimmer__intro pt-8 pb-20 lg:pb-40 border-b border-solid">
<div class="container grid grid-cols-1 lg:grid-cols-3 p-8 lg:p-0 gap-16 mx-auto">
        <div class="col-span-1">
            <h2 class="text-black text-3xl lg:text-6xl font-bold uppercase mb-0 lg:mb-14"><?php the_title(); ?></h2>
        </div>
        <div class="col-span-2 lg:grid-rows-2">
            <div class="lg:columns-2 row-span-1 mb-16 gap-8">
                <p class="mb-8 leading-8"><?php echo get_the_excerpt(); ?></p>
            </div>
            <div class="row-span-1">
                <a href="<?php the_field('section_your_stay_button_link') ?>" class="btn-general btn-general--hotel is-checked block"><?php echo esc_html( 'Jetzt buchen', 'chasseral' ) ?></a>
            </div>
        </div>
    </div>
</section>