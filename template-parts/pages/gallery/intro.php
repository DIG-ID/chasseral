<section class="gallery__intro-section pt-40 lg:pt-80 pb-10">
    <div class="container px-8 grid grid-cols-1 lg:grid-cols-4 gap-0 lg:gap-4 lg:mx-auto">
        <div class="col-span-1">
            <h2 class="gallery__intro-title text-5xl font-bold mb-10 lg:mb-0"><?php the_field('intro_title'); ?></h2>    
        </div>
        <div class="col-span-1">
        </div>
        <div class="col-span-1 lg:col-span-2 grid grid-cols-1 lg:grid-cols-8">
            <div class="col-span-1"></div>
            <div class="col-span-1 lg:col-span-5"><p class="mb-8 leading-8"><?php the_field('intro_description'); ?></p></div>
            <div class="col-span-2"></div>
        </div>
    </div>
</section>