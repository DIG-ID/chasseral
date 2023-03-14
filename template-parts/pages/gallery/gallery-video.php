<section class="section-video">
	<div class="section-video-wrapper border-t border-b border-solid border-black flex justify-between items-center">
		<h2 class="section-title text-3xl font-bold uppercase whitespace-nowrap pl-8"><?php the_field( 'video_gallerie_title' ); ?></h2>
		<div class="videos-swiper-buttons relative flex">
			<div class="swiper-button-prev videos-button-prev relative h-[65px] w-[65px] m-0 top-[unset] left-[unset] border-l border-solid border-black text-black after:text-lg after:content-['prev'] hover:bg-[#e4e4e4]"></div>
			<div class="swiper-button-next videos-button-next relative h-[65px] w-[65px] m-0 top-[unset] right-[unset] border-l border-solid border-black text-black after:text-lg after:content-['next'] hover:bg-[#e4e4e4]"></div>
		</div>
	</div>
	<?php
	$videos_gallery = get_field( 'video_gallerie_videos' );
	if ( $videos_gallery ) :
		echo '<div class="swiper video-swiper"><span></span><div class="swiper-wrapper">';
		foreach ( $videos_gallery as $video ) :
			echo '<div class="swiper-slide">';
			echo '<a href="' . esc_url( $video['url'] ) . '" data-fancybox="gallery" data-caption="' . esc_html( $video['caption'] ) . '" ><video muted src="' . esc_url( $video['url'] ) . '"></video></a>';
			echo '</div>';
		endforeach;
		echo '</div></div>';
	endif;
	if ( $videos_gallery ) :
		echo '<div class="swiper video-swiper-thumbnail"><div class="swiper-wrapper">';
		foreach ( $videos_gallery as $video ) :
			echo '<div class="swiper-slide">';
			echo '<a href="' . esc_url( $video['url'] ) . '" data-fancybox="gallery" data-caption="' . esc_html( $video['caption'] ) . '" ><video muted src="' . esc_url( $video['url'] ) . '"></video></a>';
			echo '</div>';
		endforeach;
		echo '</div></div>';
	endif;
	?>
</section>