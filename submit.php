<?php
/*
Template Name: Submit News
*/

if ( ! is_user_logged_in() ) {
	wp_redirect( bp_get_signup_page() );
	exit;
}

get_header();
the_post();
?>
	<div class="row submit">
		<?php get_template_part( 'templates/submit' ); ?>
		<?php the_content(); ?>
	</div>
<?php

get_footer();