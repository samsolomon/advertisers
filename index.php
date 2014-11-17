<?php
get_header();

if ( ! have_posts() ) {
	get_template_part( 'templates/404' );
} else {
?>
<div class="table">
<?php
	while ( have_posts() ) {
		the_post();
		get_template_part( 'templates/excerpt', get_the_ID() );
	}
?>
</div>

<?php if ( $GLOBALS['wp_query']->max_num_pages > 1 ): ?>
	<ul class="pager">
		<li><?php echo next_posts_link( 'More' ); ?></li>
	</ul>
<?php endif; ?>

<?php
}
get_footer();