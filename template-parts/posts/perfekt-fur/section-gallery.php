<section id="single-perfekt-fur-gallery" class="section-perfekt-fur__gallery py-20">
    <div class="container max-w-7xl mx-auto">
        <div class="grid grid-cols-6">
            <div class="col-span-4">
                <h2 class="text-black text-3xl font-bold mb-14"><?php echo esc_html( 'Galerie', 'chasseral' ) ?></h2>
            </div>
            <div class="col-span-2 flex justify-end">
                <div class="swiper-button-prev jura-button-prev relative bg-white h-[50px] w-[50px] m-0 top-[unset] left-[unset] border border-solid border-black text-black after:text-lg after:content-['prev'] hover:bg-[#e4e4e4]"></div>
                <div class="swiper-button-next jura-button-next relative bg-white h-[50px] w-[50px] m-0 top-[unset] right-[unset] border border-solid border-black text-black after:text-lg after:content-['next'] hover:bg-[#e4e4e4]"></div>
            </div>
        </div>
        <div class="gallery__wrapper border border-solid">
        <?php
        $gallery = get_field( 'gallery' );
        if ( $gallery ) :
            echo '<div class="swiper jura-swiper"><span></span><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                $img_url = $image['url'];
                echo '<div class="swiper-slide">';
                echo '<a href="' . esc_url( $img_url ) . '" data-fancybox="gallery-jura" data-caption="' . esc_html( $image['caption'] ) . '" ><img class="w-full h-auto object-cover max-h-[864px]" src="' . esc_url( $img_url ) . '"></a>';
                echo '</div>';
            endforeach;
            echo '</div></div>';
        endif;
        if ( $gallery ) :
            echo '<div class="swiper swiper-thumbnail jura-swiper-thumbnail"><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                echo '<div class="swiper-slide">';
                echo '<img class="w-full h-auto object-cover max-h-[150px]" src="' . esc_url( $image['sizes']['thumbnail'] ) . '">';
                echo '</div>';
            endforeach;
            echo '</div></div>';
        endif;
        ?>
        </div>
    </div>
</section>