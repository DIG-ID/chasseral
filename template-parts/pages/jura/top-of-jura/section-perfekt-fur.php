<section class="section-2cols-image grid grid-cols-1 lg:grid-cols-2 border-y border-solid">
    <div class="bg-cover bg-center h-full w-full chasseral__col border-r border-solid">
        <?php $c_image = get_field('section_perfekt_fur_image'); ?>
        <?php echo wp_get_attachment_image( $c_image, 'section-column-img' ); ?>
    </div>
    <div class="flex justify-center p-8 lg:p-20 flex-col">
        <h2 class="text-black text-2xl lg:text-3xl font-bold mb-8 lg:mb-14"><?php the_field('section_perfekt_fur_title'); ?></h2>
        <p class="text-black text-sm font-normal leading-7 mb-12 xl:max-w-[450px]"><?php the_field('section_perfekt_fur_description'); ?></p>
        <?php $page = get_permalink( get_page_by_path('top-of-jura/perfekt-fuer') -> ID ); ?>
        <a href="<?php echo $page; ?>" class="btn-general btn-general--jura"><?php echo esc_html( 'Mehr erfahren', 'chasseral' ) ?></a>
    </div>
</section>