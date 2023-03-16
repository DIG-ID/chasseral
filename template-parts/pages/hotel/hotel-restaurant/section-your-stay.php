<section class="section-hotel-restaurant__your-stay py-40 border-t border-solid">
    <div class="container grid grid-cols-3 gap-16 mx-auto">
        <div class="col-span-1">
            <h2 class="text-black text-6xl font-bold uppercase mb-14"><?php the_field('section_your_stay_title'); ?></h2>
            <p class="text-black text-3xl"><?php the_field('section_your_stay_subtitle'); ?></p>
        </div>
        <div class="col-span-2 grid-rows-2">
            <div class="columns-2 row-span-1 mb-16">
                <p class="mb-8 leading-8"><?php the_field('section_your_stay_description'); ?></p>
            </div>
            <div class="row-span-1">
                <a href="#" class="btn-general btn-general--hotel block"><?php echo esc_html( 'mehr erfahren', 'chasseral' ) ?></a>
            </div>
        </div>
    </div>
</section>