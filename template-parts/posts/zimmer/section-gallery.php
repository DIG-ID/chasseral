<?php $gallery = get_field( 'zimmer_gallery' );
if ( $gallery ) : ?>
<section id="single-perfekt-fur-gallery" class="section-perfekt-fur__gallery p-0 border-b border-t border-solid border-black">
        <div class="gallery__wrapper">
        <?php
            echo '<div class="swiper zimmer-swiper"><span></span><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                $img_url = $image['url'];
                echo '<div class="swiper-slide">';
                echo '<a href="' . esc_url( $img_url ) . '" data-fancybox="gallery-jura" data-caption="' . esc_html( $image['caption'] ) . '" ><img class="w-full h-auto object-cover max-h-[750px]" src="' . esc_url( $img_url ) . '"></a>';
                echo '</div>';
            endforeach;
            echo '</div></div>';
            echo '<div class="swiper swiper-thumbnail zimmer-swiper-thumbnail"><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                echo '<div class="swiper-slide">';
                echo '<img class="w-full h-auto object-cover max-h-[150px] cursor-pointer border border-b-0 border-black border-solid" src="' . esc_url( $image['sizes']['thumbnail'] ) . '">';
                echo '</div>';
            endforeach;
            echo '</div></div>';
        ?>
        </div>
</section>
<?php endif; ?>