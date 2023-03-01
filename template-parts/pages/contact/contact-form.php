<section class="contact_form-section pt-24 pb-24 bg-darker-green">
    <div class="container grid grid-cols-1 lg:grid-cols-4 gap-0 lg:gap-4 lg:mx-auto">
        <div class="col-span-1"></div>
        <div class="col-span-1 px-8 lg:px-0 lg:col-span-2 section-form">
            <?php $kontakt_form = get_field( 'contact_form_shortcode' );?>
			<?php echo do_shortcode( $kontakt_form ); ?>
        </div>
        <div class="col-span-1"></div>
    </div>
</section>

<section class="contact_map-section">
<?php 
$location = get_field('map');
if( $location ): ?>
    <div class="acf-map" data-zoom="16">
        <div class="marker" data-lat="<?php echo esc_attr($location['lat']); ?>" data-lng="<?php echo esc_attr($location['lng']); ?>"></div>
    </div>
<?php endif; ?>
</div>