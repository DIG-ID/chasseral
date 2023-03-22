<section class="section-institutionen pt-0 lg:pt-40 lg:border-t border-solid">
    <div class="container max-w-7xl lg:px-8 grid grid-cols-1 lg:grid-cols-1 gap-0 lg:gap-4 lg:mx-auto">
    <?php
     $args = array(  
        'post_type' => 'perfekt_fur',
        'post_status' => 'publish',
        'posts_per_page' => 8, 
        'orderby' => 'date',
        'order' => 'ASC',
    );
    $loop = new WP_Query( $args ); 
    while ( $loop->have_posts() ) : $loop->the_post(); ?>
    <article id="post-<?php echo $post->ID ?>" <?php post_class( 'article__perfektfur col-span-1 grid grid-cols-1 lg:grid-cols-12 mb-8 lg:mb-36' ); ?>>
        <div class="perfektfur-col col-span-1 lg:col-span-6 border border-solid">
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
        <div class="perfektfur-col col-span-1 lg:col-span-4 p-8 lg:p-0">
            <p class="title-normal"><?php the_title(); ?></p>
            <p class="text-body !mb-14 max-w-sm"><?php echo get_the_excerpt(); ?></p>
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