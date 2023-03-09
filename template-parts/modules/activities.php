<section class="section-activities px-0 py-32">
    <div class="activities-content">
        <div class="container grid grid-cols-2 items-end mx-auto max-w-7xl mb-8">
            <div class="col-span-1">
                <h2 class="section__title text-black text-3xl font-bold"><?php esc_html_e( 'Aktivitäten', 'chasseral' ); ?></h2>
            </div>
            <div class="col-span-1 text-end">
                <a class="btn__arrow-alle" href="<?php echo esc_url( get_post_type_archive_link( 'aktivitaten' ) ); ?>"><?php esc_html_e( 'Alle Aktivitäten', 'chasseral' ); ?> <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
                </svg></a>
            </div>
        </div>
    </div>
    <div class="activities-list">
        <div class="container grid grid-cols-3 gap-4 mx-auto max-w-7xl">
            <?php 
            $my_query = new WP_Query( array(
                'post_type'           => 'aktivitaten',
                'posts_per_page'      => 3,
            ) );
            while ( $my_query->have_posts() ) : 
            $my_query->the_post(); 
            $post_id = get_the_ID(); ?>
                <article id="post-<?php echo $post_id ?>" <?php post_class( 'col-span-1' ); ?>>
                    <?php 
                    echo get_the_post_thumbnail( $post_id, 'activities-thumbnail' ); ?>
                    <div class="activities__content-wrapper p-8 bg-white min-h-[400px] relative">
                        <h2 class="font-bold text-xl mb-4"><?php the_title(); ?></h2>
                        <span class="text-sm leading-7"><?php the_excerpt(); ?></span>
                        <a class="btn__arrow-alle absolute bottom-5" href="<?php the_permalink( $post_id ); ?>"><?php esc_html_e( 'Zur Webseite', 'chasseral' ); ?> <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
                        </svg></a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>