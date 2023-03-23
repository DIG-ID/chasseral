<?php
get_header( 'jura' );
	do_action( 'before_main_content' );
		get_template_part( 'template-parts/posts/aktivitaten/aktivitaten-content' );
	do_action( 'after_main_content' );
get_footer();
