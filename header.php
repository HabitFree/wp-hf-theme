<?php
    /* This php block here to prevent headers already sent error */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title><?php wp_title( ' | ', true, 'right' ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<div class="user-buttons">
				<?php echo do_shortcode( '[hfUserButtons]' ); ?>
			</div>
			<section id="branding">
				<h2 id="site-title">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/img/Lock-2-small.png" />
						<span class="hide"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></span>
					</a>
				</h2>
			</section>
			<nav id="menu" role="navigation">
				<?php wp_nav_menu( array(
					'theme_location' => 'main-menu'
				) ); ?>
			</nav>
		</header>
		<div id="container">