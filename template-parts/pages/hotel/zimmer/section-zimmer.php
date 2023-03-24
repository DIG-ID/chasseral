<section class="section-zimmer__zimmer p-0 border-t border-solid border-black">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 lg:gap-6">
        <div class="col-span-1 relative">
        <?php
        $args = array(  
            'post_type'      => 'zimmer',
            'post_name__in'  => [ 'zimmer-mit-dusche-wc', 'chambre-avec-douche-wc' ],
            'post_status'    => 'publish',
            'posts_per_page' => 1, 
        );
        $loop = new WP_Query( $args ); 
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="zimmer-link">
                <span class="zimmer-link--title-wrapper">
                    <h2 class="font-bold text-xl lg:text-3xl font-sans text-black uppercase mb-10"><?php the_title(); ?></h2>
                    <p class="zimmer-link--title-overlay font-bold text-base lg:text-3xl font-sans text-black uppercase m-0 absolute top-[14px] transition-all duration-300 ease-in-out -translate-x-full opacity-0"><?php echo esc_html__( 'eintreten', 'chasseral' ) ?></p>
                    <span class="zimmer-link--icon">
                        <svg width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"></path></svg>
                    </span>
                </span>
                <figure class="zimmer-link--image object-cover lg:absolute top-0 left-0 w-full h-auto">
                    <?php
                    $size = 'section-column-img';
                    if( get_the_post_thumbnail() ) :
                        echo  get_the_post_thumbnail( $post->ID, $size, '' ); 
                    else : ?>
                        <img src="https://via.placeholder.com/961x706">
                    <?php endif;
                    ?>
                </figure>
                <div class="zimmer-link--overlay">
                    <p class=" text-base lg:text-3xl font-sans text-black mb-10"><?php echo get_the_excerpt(); ?></p>
                    <p class="text-sm font-bold"><?php the_field('section_info_price'); ?></p>
                </div>
            </a>
        <?php 
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
        <div class="col-span-1 relative">
            <?php
            $args = array(  
                'post_type'      => 'zimmer',
                'post_name__in'  => ['zimmer-mit-dusche-wc-auf-der-etage', 'chambre-avec-douche-wc-a-letage'],
                'post_status'    => 'publish',
                'posts_per_page' => 1, 
            );
            $loop = new WP_Query( $args ); 
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="zimmer-link">
                    <span class="zimmer-link--title-wrapper">
                        <h2 class="font-bold text-xl lg:text-3xl font-sans text-black uppercase mb-10"><?php the_title(); ?></h2>
                        <p class="zimmer-link--title-overlay font-bold text-base lg:text-3xl font-sans text-black uppercase m-0 absolute top-[14px] transition-all duration-300 ease-in-out -translate-x-full opacity-0"><?php echo esc_html__( 'eintreten', 'chasseral' ) ?></p>
                        <span class="zimmer-link--icon">
                            <svg width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"></path></svg>
                        </span>
                    </span>
                    <figure class="zimmer-link--image object-cover lg:absolute top-0 left-0 w-full h-auto">
                        <?php
                        $size = 'section-column-img';
                        if( get_the_post_thumbnail() ) :
                            echo  get_the_post_thumbnail( $post->ID, $size, '' ); 
                        else : ?>
                            <img src="https://via.placeholder.com/961x706">
                        <?php endif;
                        ?>
                    </figure>
                    <div class="zimmer-link--overlay">
                        <p class=" text-base lg:text-3xl font-sans text-black mb-10"><?php echo get_the_excerpt(); ?></p>
                        <p class="text-sm font-bold"><?php the_field('section_info_price'); ?></p>
                    </div>
                </a>
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>