<section class="section-all-activities pt-40 border-t border-solid">
    <div class="container px-8 grid grid-cols-1 lg:grid-cols-1 gap-0 lg:gap-4 lg:mx-auto max-w-7xl">
        <div class="grid grid-cols-6">
            <div class="col-span-4">
                <h2 class="text-black text-3xl font-bold mb-14"><?php echo esc_html( 'Aktivitäten im Sommer', 'chasseral' ) ?></h2>
            </div>
            <div class="col-span-2 flex justify-end">
                <div class="swiper-button-prev institutionen-button-prev relative bg-white h-[50px] w-[50px] m-0 top-[unset] left-[unset] border border-solid border-black text-black after:text-lg after:content-['prev'] hover:bg-[#e4e4e4]"></div>
                <div class="swiper-button-next institutionen-button-next relative bg-white h-[50px] w-[50px] m-0 top-[unset] right-[unset] border border-solid border-black text-black after:text-lg after:content-['next'] hover:bg-[#e4e4e4]"></div>
            </div>
        </div>
        <div class="activities-list mb-52">
            <div class="container grid grid-cols-3 gap-4 mx-auto max-w-7xl">
                <?php 
                $my_query = new WP_Query( array(
                    'post_type'           => 'aktivitaten',
                    'category_name'       => 'summer',
                    'posts_per_page'      => 3,
                    'orderby'             => 'date',
                    'order'               => 'ASC'
                ) );
                while ( $my_query->have_posts() ) : 
                $my_query->the_post(); 
                $post_id = get_the_ID(); ?>
                    <article id="post-<?php echo $post_id ?>" <?php post_class( 'col-span-1' ); ?>>
                        <?php if (has_post_thumbnail( $post_id ) ): 
                        echo get_the_post_thumbnail( $post_id, 'activities-thumbnail' );
                        else : ?>
                        <img src="https://via.placeholder.com/420x282">
                        <?php endif; ?>
                        <div class="activities__content-wrapper p-8 bg-white min-h-[400px] relative">
                            <h2 class="font-bold text-xl mb-4"><?php the_title(); ?></h2>
                            <span class="text-sm leading-7"><?php the_excerpt(); ?></span>
                            <?php if( get_field('external_link') ): ?>
                            <a class="btn__arrow-alle absolute bottom-5" href="<?php the_field('external_link'); ?>" target="_blank"><?php esc_html_e( 'Zur Webseite', 'chasseral' ); ?> <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
                            </svg></a>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>

        <div class="grid grid-cols-6">
            <div class="col-span-4">
                <h2 class="text-black text-3xl font-bold mb-14"><?php echo esc_html( 'Aktivitäten im Winter', 'chasseral' ) ?></h2>
            </div>
            <div class="col-span-2 flex justify-end">
                <div class="swiper-button-prev institutionen-button-prev relative bg-white h-[50px] w-[50px] m-0 top-[unset] left-[unset] border border-solid border-black text-black after:text-lg after:content-['prev'] hover:bg-[#e4e4e4]"></div>
                <div class="swiper-button-next institutionen-button-next relative bg-white h-[50px] w-[50px] m-0 top-[unset] right-[unset] border border-solid border-black text-black after:text-lg after:content-['next'] hover:bg-[#e4e4e4]"></div>
            </div>
        </div>
        <div class="activities-list mb-52">
            <div class="container grid grid-cols-3 gap-4 mx-auto max-w-7xl">
                <?php 
                $my_query = new WP_Query( array(
                    'post_type'           => 'aktivitaten',
                    'category_name'       => 'winter',
                    'posts_per_page'      => 3,
                    'orderby'             => 'date',
                    'order'               => 'ASC'
                ) );
                while ( $my_query->have_posts() ) : 
                $my_query->the_post(); 
                $post_id = get_the_ID(); ?>
                    <article id="post-<?php echo $post_id ?>" <?php post_class( 'col-span-1' ); ?>>
                        <?php if (has_post_thumbnail( $post_id ) ): 
                        echo get_the_post_thumbnail( $post_id, 'activities-thumbnail' );
                        else : ?>
                        <img src="https://via.placeholder.com/420x282">
                        <?php endif; ?>
                        <div class="activities__content-wrapper p-8 bg-white min-h-[400px] relative">
                            <h2 class="font-bold text-xl mb-4"><?php the_title(); ?></h2>
                            <span class="text-sm leading-7"><?php the_excerpt(); ?></span>
                            <?php if( get_field('external_link') ): ?>
                            <a class="btn__arrow-alle absolute bottom-5" href="<?php the_field('external_link'); ?>" target="_blank"><?php esc_html_e( 'Zur Webseite', 'chasseral' ); ?> <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
                            </svg></a>
                            <?php endif; ?>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>

    </div>
</section>