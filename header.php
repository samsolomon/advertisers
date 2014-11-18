<?php
/**
 * Theme Header
 *
 * @version 1.0.0
 * @package Upvote
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
</head>
<body <?php body_class(); ?>>

	<div class="navbar" role="navigation">

		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>			
			</div>
			

			<div class="collapse navbar-collapse">
				<?php wp_nav_menu( array (
					'theme_location' => 'primary',
					'container'		 => false,
					'fallback_cb'	 => '',
					'menu_class'	 => 'nav navbar-nav',
					'walker'         => new Bootstrap_Nav_Walker()
				) ); ?>


				<?php get_template_part( 'templates/nav', is_user_logged_in() ? 'auth' : 'unauth' ); ?>
			</div>

		</div>

	</div> <!-- end nav -->
	

	<div class="welcome">
		<div class="container">
			<h3>What is Advertisers.io?</h3>
			<p>
				Advertisers is the premier community for people working in marketing and advertising. Everyday you’ll find new discussions about design, strategy and technology. Subscribe to our newsletter and get the top stiories each week.
			</p>
		</div>
	</div> <!-- end welcome message -->

	<div class="container" id="content">