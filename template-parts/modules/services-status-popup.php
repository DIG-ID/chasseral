<div id="widget-popup" class="hidden p-20 max-w-4xl">
	<div class="flex flex-col justify-center">
		<div class="see-webcam w-full flex flex-col xl:flex-row items-center gap-5 mb-8">
			<div class="grow w-full">
				<h3 class="text-xl font-bold text-black font-sans mb-3 uppercase"><?php the_field( 'widget_text_title', 'services-status' ); ?></h3>
				<p class="text-body !leading-5"><?php the_field( 'widget_text_description', 'services-status' ); ?></p>
			</div>
			<div class="widget-popup-buttons w-full lg:w-auto flex flex-col justify-items-stretch lg:flex-row lg:justify-end">
				<?php
				$schedule_link = get_field( 'widget_text_schedule_link', 'services-status' );
				if ( $schedule_link ) :
					$link_url    = $schedule_link['url'];
					$link_title  = $schedule_link['title'];
					$link_target = $schedule_link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn-general whitespace-nowrap !flex items-center flex-nowrap !px-6 w-full !max-w-full lg:mr-4" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg class="ml-1 " width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
						</svg>
					</a>
					<?php
				endif;
				?>
				<?php
				$webcam_link = get_field( 'widget_text_link', 'services-status' );
				if ( $webcam_link ) :
					$link_url    = $webcam_link['url'];
					$link_title  = $webcam_link['title'];
					$link_target = $webcam_link['target'] ? $link['target'] : '_self';
					?>
					<a class="btn-general whitespace-nowrap !flex items-center flex-nowrap !px-6 w-full !max-w-full " href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
						<?php echo esc_html( $link_title ); ?>
						<svg class="ml-1 " width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
						</svg>
					</a>
					<?php
				endif;
				?>
			</div>
		</div>
		<?php do_action( 'service_status_widget' ); ?>
		<?php do_action( 'notification' ); ?>
	</div>
</div>