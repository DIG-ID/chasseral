<section class="activities__intro-section p-8 lg:py-16 xl:pt-20 xl:pb-40">
    <div class="container lg:px-8 grid grid-cols-1 lg:grid-cols-5 gap-0 lg:gap-8 lg:mx-auto">
        <div class="col-span-2">
            <h2 class="gallery__intro-title title-big"><?php the_title(); ?></h2>    
        </div>
        <div class="col-span-2 md:col-span-3 xl:col-span-2">
        <p class="text-body"><?php echo get_the_excerpt(); ?></p>
        </div>
    </div>
</section>