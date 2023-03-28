<?php $gallery = get_field( 'gallery' );
if ( $gallery ) : ?>
<section id="single-perfekt-fur-gallery" class="section-perfekt-fur__gallery py-20">
    <div class="container max-w-7xl mx-auto relative">
        <div class="grid grid-cols-6 px-8 lg:px-0">
            <div class="col-span-4">
                <h2 class="title-normal !mb-14 mx-0 lg:mx-8 xl:mx-0"><?php echo esc_html( 'Galerie', 'chasseral' ) ?></h2>
            </div>
            <div class="col-span-2 flex justify-end lg:mr-6 xl:hidden">
                <div class="swiper-button-prev jura-button-prev relative bg-white h-[50px] w-[50px] m-0 top-[unset] left-[unset] border border-solid border-black text-black after:text-lg after:content-['prev'] hover:bg-[#e4e4e4]"></div>
                <div class="swiper-button-next jura-button-next relative bg-white h-[50px] w-[50px] m-0 top-[unset] right-[unset] border border-solid border-black text-black after:text-lg after:content-['next'] hover:bg-[#e4e4e4]"></div>
            </div>
        </div>
        <div class="gallery__wrapper border border-solid">
        <?php
            echo '<div class="swiper jura-swiper"><span></span><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                $img_url = $image['url'];
                echo '<div class="swiper-slide h-full xl:h-auto">';
                echo '<a href="' . esc_url( $img_url ) . '" data-fancybox="gallery-jura" data-caption="' . esc_html( $image['caption'] ) . '" ><img class="w-full h-full xl:h-auto object-cover max-h-[250px] sm:max-h-[350px] md:max-h-[500px] lg:max-h-[600px] xl:max-h-[720px]" src="' . esc_url( $img_url ) . '"></a>';
                echo '</div>';
            endforeach;
            echo '</div></div>';
            echo '<div class="swiper swiper-thumbnail jura-swiper-thumbnail hidden xl:block"><div class="swiper-wrapper">';
            foreach ( $gallery as $image ) :
                echo '<div class="swiper-slide">';
                echo '<img class="w-full h-auto object-cover max-h-[150px] cursor-pointer border border-b-0 border-black border-solid" src="' . esc_url( $image['sizes']['thumbnail'] ) . '">';
                echo '</div>';
            endforeach;
            echo '</div>';
            echo '</div>';
            echo '<div class="swiper-button-prev jura-button-prev hidden xl:flex left-[50px] xl:left-[-100px]"></div>';
            echo '<div class="swiper-button-next jura-button-next hidden xl:flex right-[50px] xl:right-[-100px]"></div>';
        ?>
        </div>
    </div>
</section>
<?php endif; ?>