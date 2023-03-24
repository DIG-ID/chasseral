<?php $gallery = get_field( 'gallery' );
if ( $gallery ) : ?>
<section id="single-perfekt-fur-gallery" class="section-perfekt-fur__gallery py-20">
    <div class="container max-w-7xl mx-auto relative">
        <div class="grid grid-cols-6 px-8 lg:px-0">
            <div class="col-span-4">
                <h2 class="title-normal !mb-14"><?php echo esc_html( 'Galerie', 'chasseral' ) ?></h2>
            </div>
        </div>
        <div class="gallery__wrapper border border-solid">
        <?php
            echo '<div class="swiper jura-swiper"><span></span><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                $img_url = $image['url'];
                echo '<div class="swiper-slide">';
                echo '<a href="' . esc_url( $img_url ) . '" data-fancybox="gallery-jura" data-caption="' . esc_html( $image['caption'] ) . '" ><img class="w-full h-auto object-cover max-h-[800px]" src="' . esc_url( $img_url ) . '"></a>';
                echo '</div>';
            endforeach;
            echo '</div></div>';
            echo '<div class="swiper swiper-thumbnail jura-swiper-thumbnail"><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                echo '<div class="swiper-slide">';
                echo '<img class="w-full h-auto object-cover max-h-[150px] cursor-pointer border border-b-0 border-black border-solid" src="' . esc_url( $image['sizes']['thumbnail'] ) . '">';
                echo '</div>';
            endforeach;
            echo '</div>';
            echo '</div>';
            echo '<div class="swiper-button-prev jura-button-prev left-[-100px]"></div>';
            echo '<div class="swiper-button-next jura-button-next right-[-100px]"></div>';
        ?>
        </div>
    </div>
</section>
<?php endif; ?>