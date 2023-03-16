<section class="section-contacts-schedule border-t border-solid border-black py-36">
	<div class="container mx-auto px-8 grid grid-cols-2">
		<div class="contacts-wrapper">
			<h2 class="text-3xl font-bold mb-8">Kontakt<?php //the_field(); ?></h2>

			<ul class="contacts-content">
				<li class="flex mb-6">
					<p class="w-[100px]"><?php esc_html_e( 'Adresse:', 'chasseral' ); ?></p>
					<p class=""><?php the_field( 'footer_address', 'options' ); ?></p>
				</li>
				<li class="flex mb-6">
					<p class="w-[100px]"><?php esc_html_e( 'E-Mail:', 'chasseral' ); ?></p>
					<a href="mailto:<?php echo esc_attr( get_field( 'footer_email', 'options' ) ); ?>" class=""><?php the_field( 'footer_email', 'options' ); ?></a>
				</li>
				<li class="flex mb-6">
					<p class="w-[100px]"><?php esc_html_e( 'Telefon:', 'chasseral' ); ?></p>
					<div class="contacts-phone">
						<?php
						$phone = get_field( 'footer_phone', 'options' );
						if ( $phone ) :
							?><a href="tel:<?php echo esc_attr( str_replace(' ', '', $phone) ); ?>" class=""><?php the_field( 'footer_phone', 'options' ); ?></a><?php
						endif;
						$fax = get_field( 'footer_fax', 'options' );
						if ( $fax ) :
							?><a href="tel:<?php echo esc_attr( str_replace(' ', '', $fax) ); ?>" class=""><?php the_field( 'footer_fax', 'options' ); ?></a><?php
						endif;
						?>
					</div>
				</li>
			</ul>

		</div>
		<div class="schedule-wrapper">
			<h2 class="text-3xl font-bold mb-8">Öffnungszeiten<?php //the_field(); ?></h2>
		</div>
	</div>
</section>