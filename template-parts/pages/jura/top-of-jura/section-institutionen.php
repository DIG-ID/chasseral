<section class="section-institutionen px-0 py-20 xl:py-52">
    <div class="flex justify-center flex-col pl-8 pr-0 lg:pr-0 md:pl-16 xl:pl-72">
        <div class="grid grid-cols-1 lg:grid-cols-6">
            <div class="col-span-4">
                <h2 class="text-black text-2xl lg:text-3xl font-bold mb-14 pr-8"><?php the_field('section_institutionen_title'); ?></h2>
            </div>
            <div class="col-span-2 flex md:justify-end lg:justify-center mb-8 mr-8 xl:mb-0 xl:mr-0">
                <div class="swiper-button-prev institutionen-button-prev relative bg-white h-[50px] w-[50px] m-0 top-[unset] left-[unset] border border-solid border-black text-black after:text-lg after:content-['prev'] hover:bg-[#e4e4e4]"></div>
                <div class="swiper-button-next institutionen-button-next relative bg-white h-[50px] w-[50px] m-0 top-[unset] right-[unset] border border-solid border-black text-black after:text-lg after:content-['next'] hover:bg-[#e4e4e4]"></div>
            </div>
        </div>
        <div class="swiper-institutionen overflow-hidden">
        <?php if( have_rows('section_institutionen_institutionen_list') ): ?>
            <div class="swiper-wrapper">
            <?php while( have_rows('section_institutionen_institutionen_list') ): the_row(); 
                $image = get_sub_field('logo');
                ?>
                <div class="swiper-slide swiper-institutionen-slide border-solid border-black border relative pb-8 min-h-[630px]">
                    <?php echo wp_get_attachment_image( $image, 'institutionen-thumbnail' ); ?>
                    <div class="p-8">
                        <p class="font-bold text-xl mb-6"><?php the_sub_field('title'); ?></p>
                        <p class="text-sm font-normal leading-7"><?php the_sub_field('description'); ?></p>
                        <a href="<?php the_sub_field('external_link'); ?>" alt="" title="" target="_blank" class="absolute bottom-8 left-8 font-semibold inline text-sm"><?php echo esc_html_e( 'zur Webseite','chasseral' ); ?>
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline">
                            <path d="M6 12L4.93125 10.95L9.13125 6.75H0V5.25H9.13125L4.93125 1.05L6 0L12 6L6 12Z" fill="black"/>
                            </svg>
                        </a>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</section>