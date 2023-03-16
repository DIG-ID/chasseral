<section class="section-zimmer__intro pt-20 pb-40">
<div class="container grid grid-cols-3 gap-16 mx-auto">
        <div class="col-span-1">
            <h2 class="text-black text-6xl font-bold uppercase mb-14"><?php the_title(); ?></h2>
        </div>
        <div class="col-span-2 grid-rows-2">
            <div class="columns-2 row-span-1 mb-16">
                <p class="mb-8 leading-8"><?php echo get_the_excerpt(); ?></p>
            </div>
            <div class="row-span-1">
                <a href="#" class="btn-general btn-general--hotel is-checked block"><?php echo esc_html( 'Jetzt buchen', 'chasseral' ) ?></a>
            </div>
        </div>
    </div>
</section>