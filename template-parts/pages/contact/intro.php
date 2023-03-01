<section class="contact_intro-section pt-40 lg:pt-80 pb-24">
    <div class="container px-8 grid grid-cols-1 lg:grid-cols-4 lg:gap-4 lg:mx-auto">
        <div class="col-span-1">
            <h2 class="contact__intro-title text-5xl font-bold mb-10 lg:mb-0"><?php the_field('intro_title'); ?></h2>    
        </div>
        <div class="col-span-1 lg:col-span-2 grid grid-cols-1 lg:grid-cols-3">
            <div class="col-span-1 lg:col-span-3">
                <p class="mb-8 leading-8"><?php the_field('intro_description'); ?></p>
            </div>
            <div class="col-span-1 ">
                <p class="leading-8 font-bold"><?php the_field('address_field'); ?></p>
            </div>
            <div class="col-span-1 lg:col-span-2">
                <p class="leading-8 font-bold pl-0 lg:pl-4"><?php the_field('contacts_field'); ?></p>
            </div>
        </div>
        <div class="col-span-1"></div>
    </div>
</section>