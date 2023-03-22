<section class="section-intro py-16 lg:py-32 overflow-hidden">
	<div class="container mx-auto px-8 grid grid-cols-1 lg:grid-cols-12">
		<div class="col-span-1 lg:col-span-4">
			<h2 class="section-title text-3xl font-bold"><?php the_field( 'intro_title' ); ?></h2>
		</div>
		<div class="col col-span-1 lg:col-span-5 lg:col-start-6">
			<p class="section-description text-sm font-normal leading-7"><?php the_field( 'intro_description' ); ?></p>
		</div>
	</div>
</section>