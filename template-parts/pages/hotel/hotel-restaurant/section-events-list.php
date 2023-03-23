<section class="section-hotel-restaurant__your-stay py-8 lg:py-40 border-t border-solid">
		<div class="events-content">
				<div class="container grid grid-cols-1 lg:grid-cols-2 items-end mx-auto max-w-7xl mb-8 px-8 lg:px-0">
						<div class="col-span-1">
								<h2 class="section__title text-black text-3xl font-bold"><?php esc_html_e( 'Aktuelle Events', 'chasseral' ); ?></h2>
						</div>
						<div class="col-span-1 lg:text-end">
								<?php do_action( 'see_all', 'archives_pages_events', 'Events' ); ?>
						</div>
				</div>
		</div>
		<div class="events-list">
				<div class="container grid grid-cols-1 lg:grid-cols-3 gap-4 mx-auto max-w-7xl">
						<?php 
						$my_query = new WP_Query( array(
								'post_type'           => 'events',
								'post_status'         => 'publish',
								'category_name'       => 'hotel-restaurant',
								'posts_per_page'      => 3,
								'meta_key'            => 'start_date',
								'orderby'             => 'meta_value',
								'order'               => 'DESC',
						) );
						while ( $my_query->have_posts() ) : 
						$my_query->the_post(); 
						$post_id = get_the_ID(); ?>
								<article id="post-<?php echo $post_id ?>" <?php post_class( 'col-span-1' ); ?>>
										<a href="<?php the_permalink(); ?>" class="card-blog-wrapper">
												<?php if (has_post_thumbnail( $post_id ) ): 
												echo get_the_post_thumbnail( $post_id, 'activities-thumbnail' );
												else : ?>
												<img src="https://via.placeholder.com/420x282">
												<?php endif; ?>
												<div class="events__content-wrapper p-8 lg:py-8 lg:px-0 min-h-[400px] relative">
														<p class="start-date text-sm text-text-grey font-normal whitespace-nowrap mb-2">
																<?php
																$start_date = get_field( 'start_date' );
																echo gmdate( 'l d, F Y', strtotime( $start_date ) );
														?></p>
														<h2 class="font-bold text-xl mb-4"><?php the_title(); ?></h2>
														<span class="text-sm leading-7"><?php the_excerpt(); ?></span>
												</div>
										</a>
								</article>
						<?php endwhile; wp_reset_postdata(); ?>
				</div>
		</div>
</section>