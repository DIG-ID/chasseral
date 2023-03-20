<section class="section-activities px-0 py-10 lg:py-32">
    <div class="activities-content">
        <div class="container grid grid-cols-1 lg:grid-cols-2 items-end mx-auto max-w-7xl mb-8">
            <div class="col-span-1">
                <h2 class="section__title text-black text-3xl font-bold"><?php esc_html_e( 'Aktivitäten', 'chasseral' ); ?></h2>
            </div>
            <div class="col-span-1 text-end">
                <?php 
                $act_page = get_permalink( get_page_by_path('top-of-jura/aktivitaeten') -> ID ); ?>
                <a class="btn__arrow-alle" href="<?php echo $act_page; ?>"><?php esc_html_e( 'Alle Aktivitäten', 'chasseral' ); ?> <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
                </svg></a>
            </div>
        </div>
    </div>
    <div class="activities-list">
        <div class="container grid grid-cols-1 lg:grid-cols-3 gap-4 mx-auto max-w-7xl">
            <?php
            $featured_events = get_field( 'activities' );
            if ( $featured_events ) :
                foreach ( $featured_events as $post ) :
                    setup_postdata( $post ); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'col-span-1' ); ?>>
                    <?php if ( has_post_thumbnail() ) :
                    echo get_the_post_thumbnail( get_the_ID(), 'activities-thumbnail' );
                    else : ?>
                    <img src="https://via.placeholder.com/420x282">
                    <?php endif; ?>
                    <div class="activities__content-wrapper p-8 bg-white min-h-[400px] relative">
                        <h2 class="font-bold text-xl mb-4"><?php the_title(); ?></h2>
                        <span class="text-sm leading-7"><?php the_excerpt(); ?></span>
                        <a class="btn__arrow-alle absolute bottom-5" href="<?php the_permalink( $post_id ); ?>"><?php esc_html_e( 'Zur Webseite', 'chasseral' ); ?> <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
                        </svg></a>
                    </div>
                </article>
                <?php endforeach;
                wp_reset_postdata();
            endif; ?>
            
        </div>
    </div>
</section>