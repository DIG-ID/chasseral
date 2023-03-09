<section class="section-lastest-events">
	<div class="section-title-wrapper border-t border-b border-solid border-black flex justify-between items-center">
		<h2 class="section-title text-3xl font-bold uppercase whitespace-nowrap pl-8"><?php esc_html_e( 'aktuelle Events', 'chasseral' ); ?></h2>
		<div class="events-swiper-buttons relative flex">
			<div class="swiper-button-prev events-button-prev relative h-[65px] w-[65px] m-0 top-[unset] left-[unset] border-l border-solid border-black text-black after:text-lg after:content-['prev'] hover:bg-[#e4e4e4]"></div>
			<div class="swiper-button-next events-button-next relative h-[65px] w-[65px] m-0 top-[unset] right-[unset] border-l border-solid border-black text-black after:text-lg after:content-['next'] hover:bg-[#e4e4e4]"></div>
		</div>
	</div>
	<div class="swiper swiper-events">
		<div class="swiper-wrapper">
			<?php get_template_part( 'template-parts/loops/loop', 'events' ); ?>
		</div>
	</div>
</section>