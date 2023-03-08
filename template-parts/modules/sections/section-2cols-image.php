<section class="section-2cols-image grid grid-cols-2">
    <div class="flex justify-center p-20 flex-col border-y border-solid">
        <h2 class="text-black text-3xl font-bold mb-16"><?php the_field('section_der_chasseral_title'); ?></h2>
        <p class="text-black text-sm font-normal leading-7 mb-14"><?php the_field('section_der_chasseral_description'); ?></p>
        <a href="#" class="btn__general"><?php echo esc_html( 'Mehr erfahren', 'chasseral' ) ?></a>
    </div>
    <div class="bg-cover bg-center h-full w-full">
        <?php $b_image = get_field('section_der_chasseral_image'); ?>
        <?php echo wp_get_attachment_image( $b_image, 'full' ); ?>
    </div>
</section>