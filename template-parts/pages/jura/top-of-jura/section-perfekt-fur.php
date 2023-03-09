<section class="section-2cols-image grid grid-cols-2 border-y border-solid">
    <div class="bg-cover bg-center h-full w-full">
        <?php $c_image = get_field('section_perfekt_fur_image'); ?>
        <?php echo wp_get_attachment_image( $c_image, 'section-column-img' ); ?>
    </div>
    <div class="flex justify-center p-20 flex-col">
        <h2 class="text-black text-3xl font-bold mb-14"><?php the_field('section_perfekt_fur_title'); ?></h2>
        <p class="text-black text-sm font-normal leading-7 mb-12 xl:max-w-[450px]"><?php the_field('section_perfekt_fur_description'); ?></p>
        <a href="#" class="btn-general"><?php echo esc_html( 'Mehr erfahren', 'chasseral' ) ?></a>
    </div>
</section>