<section id="single-perfekt-fur-pdf" class="section-perfekt-fur__pdf pt-0 pb-20 lg:py-20">
<?php
$file = get_field('section_pdf_pdf_file');
if( $file ) : ?>
<div class="container max-w-7xl mx-auto">
    <div class="grid grid-cols-6">
        <div class="col-span-6 px-8 lg:px-0">
            <?php
            $url = wp_get_attachment_url( $file ); ?>
            <a href="<?php echo esc_html($url); ?>"><h2 class="title-normal !mb-14 mx-0 lg:mx-8 xl:mx-0"><span class="mr-4"><?php echo esc_html_e( 'Karte', 'chasseral' ) ?></span><svg class="inline" width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 7.41176H12.8571V0H5.14286V7.41176H0L9 16.0588L18 7.41176ZM0 18.5294V21H18V18.5294H0Z" fill="black"/></svg>
            </h2></a>
        </div>
    </div>
    <div class="w-full">
    <?php 
        $image = get_field('section_pdf_preview_image');
        $size = 'full';
        if( $image ) :
            echo '<a href="'. esc_html($url) . '" target="_blank">'. wp_get_attachment_image( $image, $size ) .'</a>';
        else : ?>
            <img src="https://via.placeholder.com/1278x800">
        <?php endif;
    ?>
    </div>
</div>
<?php endif; ?>
</section>