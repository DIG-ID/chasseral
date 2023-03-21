<section class="activities__intro-section p-8 lg:pt-20 lg:pb-40">
    <div class="container lg:px-8 grid grid-cols-1 lg:grid-cols-5 gap-0 lg:gap-8 lg:mx-auto">
        <div class="col-span-2">
            <h2 class="gallery__intro-title text-3xl lg:text-5xl uppercase font-bold mb-10 lg:mb-0"><?php the_title(); ?></h2>    
        </div>
        <div class="col-span-2">
        <p class="mb-8 leading-8"><?php echo get_the_excerpt(); ?></p>
        </div>
    </div>
</section>