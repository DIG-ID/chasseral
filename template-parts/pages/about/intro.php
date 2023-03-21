<section class="about_intro-section pt-40 lg:pt-80 pb-24 overflow-hidden">
    <div class="container px-8 grid grid-cols-1 lg:grid-cols-3 lg:gap-6 lg:mx-auto">
        <div class="col-span-1">
            <h2 class="about__intro-title text-5xl font-bold mb-10 lg:mb-0"><?php the_title(); ?></h2>
        </div>
        <div class="col-span-1">
                <p class="mb-8 leading-8"><?php the_field('intro_description_left'); ?></p>
        </div>
        <div class="col-span-1">
            <p class="leading-8"><?php the_field('intro_description_right'); ?></p>
        </div>
    </div>
</section>