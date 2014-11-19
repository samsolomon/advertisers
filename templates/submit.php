<form role="form" class="col-sm-8" method="post" action="<?php echo home_url('/'); ?>">

	<?php wp_nonce_field( 'new-post-' . get_current_user_id() ); ?>
	<input type="hidden" name="redirect_to" value="<?php the_ID() ?>" />
	<input type="hidden" name="action" value="upvote-new-post" />

	<div class="form-group">
		<label for="title">Title</label>
		<input type="title" class="form-control" id="title" placeholder="What is the title of the article?" name="title">
	</div>

	<div class="form-group">
		<label for="url">URL</label>
		<input type="url" class="form-control" id="url" placeholder="http://signaltower.co" name="url">
	</div>

	<label for="text">Comment about this link — <em>Optional</em></label>
	<textarea id="text" class="form-control comment" placeholder="Enter your comment here." rows="3" name="content"></textarea>

	<button type="submit" class="btn btn-default">Submit</button>
</form>

<div class="col-sm-4 sidebar">
	<p>Find an article that might be interesting to people in the advertising community? Here's the place to share it.</p>
</div>