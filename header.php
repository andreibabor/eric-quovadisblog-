<?php

/**

 * The Header for our theme.

 *

 * Displays all of the <head> section and everything up till <div id="content">

 *

 * @package dazzling

 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">



	<!-- favicon -->



	<?php if ( of_get_option( 'custom_favicon' ) ) { ?>

	<link rel="icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" />

	<?php } ?>



	<!--[if IE]><?php if ( of_get_option( 'custom_favicon' ) ) { ?><link rel="shortcut icon" href="<?php echo of_get_option( 'custom_favicon' ); ?>" /><?php } ?><![endif]-->



	<?php wp_head(); ?>
	<style>
	.pp {
		background-color: #1b7e7b;
		border: 0 solid;
		bottom: 0;
		color: #fff;
		float: right;
		font-size: 12px;
		font-weight: bold;
		height: 21px;
		margin-top: 0px;
		padding-left: 6px;
		padding-right: 6px;
		position: relative;
		right: 250px;
	}

	@media only screen and (min-width: 481px) and (max-width: 1240px) {

		.pp { right: 0;}

	}
	@media only screen and (min-width: 320px) and (max-width: 480px) {

		.pp { right: 0; margin-top: 2px;}

	}
	</style>


</head>



<body <?php body_class(); ?>>

	<div id="page" class="hfeed site">

<header class="top-bar">
		<div class="container">
			<div class="row">
				<div class="first-info hidden-xs">
					Designed in France, Made in the USA
				</div>
				<div class="pull-right">
					<ul class="nav navbar-nav">
						<li class="hidden-xs"><a href="http://quovadisblog.com/" target="_blank">Blog</a></li>
						<li class="hidden-xs"><a href="/contact">Contact</a></li>
						<li class="hidden-xs"><a href="http://eepurl.com/ca0czf">Subscribe</a></li>
						<li class="topbook"><a href="/search/which-planner" style="border-top: 0;">Which Planner Do I Have?<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2019/07/top-book.png" style="height: 24px;margin-left: 7px;margin-top: -4px;" alt=""></a></li>
					</ul>
				</div>
			</div>
		</div>
	</header>


		<nav class="navbar navbar-default" role="navigation">

			<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					</button>



					<?php if( get_header_image() != '' ) : ?>



					<div id="logo">

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>"  height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php bloginfo( 'name' ); ?>" class="img-responsive"/></a>

					</div><!-- end of #logo -->



				<?php endif; // header image was removed ?>



				<?php if( !get_header_image() ) : ?>



				<div id="logo">

					<span class="site-name"><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>

				</div><!-- end of #logo -->



			<?php endif; // header image was removed (again) ?>



		</div>

		<?php dazzling_header_menu(); ?>

	</div>

	</nav><!-- .site-navigation -->