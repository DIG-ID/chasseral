<section class="section-intro pt-40 lg:pt-80 pb-40">
	<div class="lg:container mx-auto grid grid-cols-1 lg:grid-cols-12 px-8 xl:px-0">
		<div class="title col-span-1 lg:col-span-3">
			<h1 class="text-2xl lg:text-5xl text-main-green font-extrabold mb-12"><?php the_title(); ?></h1>
		</div>
		<div class="description col-span-1 lg:col-start-8 lg:col-span-4">
			<p class="text-sm text-main-green leading-8 tracking-wider">
				<?php echo esc_html( wp_strip_all_tags( get_the_content() ) ); ?>
			</p>
		</div>
	</div>
</section>
