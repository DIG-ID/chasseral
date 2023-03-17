<section class="section-zimmer__zimmer p-0">
    <div class="grid grid-cols-2 gap-6">
        <div class="col-span-1 relative">
        <?php
        $args = array(  
            'post_type'      => 'zimmer',
            'name'           => 'zimmer-mit-dusche-wc',
            'post_status'    => 'publish',
            'posts_per_page' => 1, 
        );
        $loop = new WP_Query( $args ); 
        while ( $loop->have_posts() ) : $loop->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="zimmer-link">
                <span class="zimmer-link--title-wrapper">
                    <h2 class="font-bold text-3xl font-sans text-black uppercase mb-10"><?php the_title(); ?></h2>
                    <p class="zimmer-link--title-overlay font-bold text-3xl font-sans text-black uppercase m-0 absolute top-[14px] transition-all duration-300 ease-in-out -translate-x-full opacity-0"><?php echo esc_html__( 'eintreten', 'chasseral' ) ?></p>
                    <span class="zimmer-link--icon">
                        <svg width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"></path></svg>
                    </span>
                </span>
                <figure class="zimmer-link--image object-cover absolute top-0 left-0 w-full h-auto">
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
                    <p class="text-3xl font-sans text-black mb-10">Doppelzimmer mit Dusche und WC im Zimmer. Diese Zimmer sind alle im zweiten Stock gelegen (kein Lift)</p>
                    <p class="text-sm font-bold">ab CHF 190.- pro Zimmer</p>
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
                'name'           => 'zimmer-mit-dusche-wc-auf-der-etage',
                'post_status'    => 'publish',
                'posts_per_page' => 1, 
            );
            $loop = new WP_Query( $args ); 
            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="zimmer-link">
                    <span class="zimmer-link--title-wrapper">
                        <h2 class="font-bold text-3xl font-sans text-black uppercase mb-10"><?php the_title(); ?></h2>
                        <p class="zimmer-link--title-overlay font-bold text-3xl font-sans text-black uppercase m-0 absolute top-[14px] transition-all duration-300 ease-in-out -translate-x-full opacity-0"><?php echo esc_html__( 'eintreten', 'chasseral' ) ?></p>
                        <span class="zimmer-link--icon">
                            <svg width="22" height="22" fill="none"><path fill="#000" d="m11 22-1.96-1.925 7.7-7.7H0v-2.75h16.74l-7.7-7.7L11 0l11 11-11 11Z"></path></svg>
                        </span>
                    </span>
                    <figure class="zimmer-link--image object-cover absolute top-0 left-0 w-full h-auto">
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
                        <p class="text-3xl font-sans text-black mb-10">Zimmer mit Dusche/WC auf Etage für zwei bis vier Personen Diese Zimmer sind im ersten und zweiten Stock gelegen (kein Lift). Die Duschen und WCs befinden sich im ersten Stock.</p>
                        <p class="text-sm font-bold">
                            Doppelzimmer 11- 14m2,		CHF 160.- pro Zimmer<br>
                            Drei-Bettzimmer 15 - 20m2		CHF 225.- pro Zimmer<br>
                            Vier-Bettzimmer 19m2		CHF 295.- pro Zimmer
                        </p>
                    </div>
                </a>
            <?php 
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>