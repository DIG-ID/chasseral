<section id="single-perfekt-fur-intro" class="section-perfekt-fur__intro grid grid-cols-1">
    <?php 
    $size = 'chasseral-jura-headers';
    if( get_the_post_thumbnail() ) :
        echo  get_the_post_thumbnail( $post->ID, $size, '' ); 
    else : ?>
        <img src="https://via.placeholder.com/1920x500">
    <?php endif;
    ?>
    <div class="py-40 container mx-auto">
        <div class="mb-20 w-full">
            <h2 class="text-black text-6xl font-bold uppercase"><?php the_title(); ?></h2>
        </div>
        <div>
            <p class="text-black text-sm font-normal leading-7 columns-2 lg:gap-40 lg:mr-[30%]"><?php the_field('general_information'); ?></p>
        </div>
    </div>
</section>