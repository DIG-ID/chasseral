<section class="section-hero w-full h-[95vh] flex flex-col justify-between bg-center bg-fixed bg-no-repeat bg-cover" style="background-image: url(<?php echo esc_url( wp_get_attachment_image_url( get_field( 'hero_image' ), 'full' ) ); ?>)">
	<div class="container mx-auto px-8 pt-72">
		<h2 class="text-6xl font-bold uppercase"><?php the_field( 'hero_title' ); ?></h2>
	</div>
	<div class="sliding-text-wrapper w-full bg-bg-color border-t border-b border-solid border-black py-4 overflow-hidden">
		<div class="sliding-text-content relative flex z-0">
			<?php
			$sliding_text = get_field( 'hero_sliding_text' );
			$num_items    = 20;
			?>
			<ul class="sliding-text flex list-disc">
				<?php for ( $i = 1; $i <= $num_items; $i++ ) : ?>
					<li class="text-3xl font-bold uppercase whitespace-nowrap pr-10 select-none"><?php echo $sliding_text; ?></li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</section>
