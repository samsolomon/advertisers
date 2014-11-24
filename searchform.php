<div class="row">
	
<form role="form" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<div>
		<label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
		<input type="text" class="form-control search-box" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Try terms like Branding or Creative..."/>
		<input type="submit" class="btn btn-default" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
	</div>
</form>

</div>