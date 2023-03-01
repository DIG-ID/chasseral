<footer class="main-footer bg-darker-green text-main-beige">
	<div class="copyright container mx-auto py-8 px-8 xl:px-0">
		<p class="copyright-text text-xs font-normal">
			<?php
			$y = date( 'Y' );
			printf(
				esc_html__( 'Copyright &copy; %d Chasseral', 'chasseral' ),
				esc_html( $y ),
			);
			?>
		</p>
	</div>
</footer>