<section class="section-institutionen pt-40 border-t border-solid">
    <div class="container max-w-7xl px-8 grid grid-cols-1 lg:grid-cols-1 gap-0 lg:gap-4 lg:mx-auto">
    <?php
     $args = array(  
        'post_type' => 'perfekt_fur',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'title', 
        'order' => 'ASC', 
    );
    $loop = new WP_Query( $args ); 
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <article id="post-<?php echo $post->ID ?>" <?php post_class( 'article__perfektfur col-span-1 grid grid-cols-12 mb-36' ); ?>>
        <div class="perfektfur-col col-span-6 border border-solid">
            <?php
            $size = 'perfekt-fur-thumbnail';
            if( get_the_post_thumbnail() ) :
                echo  get_the_post_thumbnail( $post->ID, $size, '' ); 
            else : ?>
                <img src="https://via.placeholder.com/640x470">
            <?php endif;
            ?>
        </div>
        <div class="perfektfur-col col-span-1"></div>
        <div class="perfektfur-col col-span-4">
            <p class="text-black text-3xl font-bold mb-16"><?php the_title(); ?></p>
            <p class="text-black text-sm font-normal leading-7 mb-14 max-w-sm"><?php echo get_the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="btn-general btn-general--jura"><?php echo esc_html( 'Mehr erfahren', 'chasseral' ) ?></a>
        </div>
        <div class="perfektfur-col col-span-1"></div>
    </article>
    <?php 
    endwhile;
    wp_reset_postdata();
    ?>
    </div>
</section>