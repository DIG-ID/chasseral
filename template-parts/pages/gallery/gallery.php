<section class="gallery__gallery-section pb-40">
    <div class="container px-8 lg:mx-auto">
    <?php 
    $images = get_field('main_gallery');
    $size = 'gallery-image'; // (thumbnail, medium, large, full or custom size)
    if( $images ): ?>
        <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-2 sm:gap-4">
            <?php foreach( $images as $image_id ): ?>
                <div class="col-span-1">
                    <?php $pic_url = wp_get_attachment_image_url( $image_id, 'full' ); ?>
                    <a href="<?php echo esc_url($pic_url); ?>" data-fancybox="gallery">
                        <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    </div>
</section>