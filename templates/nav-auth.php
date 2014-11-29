<?php defined('ABSPATH') or die; ?>
<div class="navbar-right">
	<ul class="nav navbar-nav">
		<li><a href="<?php bp_loggedin_user_link(); ?>"><?php bp_loggedin_user_fullname(); ?> (<?php printf( '%d', upvote_get_points( $user->ID, 'user' ) ); ?>)</a></li>
		<li><a href="<?php echo wp_logout_url( wp_guess_url() ); ?>">Logout</a></li>
	</ul>
</div>