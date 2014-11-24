<?php
/*
Template Name: Search Page
*/
get_header();

?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="entry-title">Search</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-8">
		<article id="post-0" class="post error404 no-results not-found">
			<?php get_search_form(); ?>
		</article>
		</div>
		<div class="col-sm-4 sidebar">
			<p>
				Search for posts on Advertisers by title or content.
			</p>
		</div>
	</div>
</div>

<?php

get_footer();