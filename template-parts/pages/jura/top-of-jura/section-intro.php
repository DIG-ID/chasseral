<section id="section-topofjura" class="section-topofjura__intro h-full lg:h-screen grid grid-cols-1 lg:grid-rows-2">
	<?php $header_image = get_field( 'section_intro_header_image' );
	$size = 'chasseral-jura-headers';
	$header_imgArr = wp_get_attachment_image_src( $header_image, $size ); ?>
	<div class="bg-cover bg-center h-[50vh] lg:h-full w-full lg:row-span-1 border-b border-solid border-black" style="background-image: url(<?php echo $header_imgArr[0]; ?>);"></div>
	<div class="flex justify-center h-full w-full row-span-1 bg-no-repeat p-8" style="background-image: url(<?php echo wp_upload_dir()['url'] . '/jura_illustration.svg' ?>);    background-position: 0 105%;">
		<div class="pb-36 lg:py-20 lg:container grid grid-cols-1 lg:grid-cols-2 justify-center">
			<div class="mb-4">
				<h2 class="title-big"><?php the_field( 'section_intro_title' ); ?></h2>
			</div>
			<div>
				<p class="text-body px-16 lg:px-16 xl:px-36"><?php the_field( 'section_intro_description' ); ?></p>
			</div>
		</div>
	</div>
</section>