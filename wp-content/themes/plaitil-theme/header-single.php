<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link href='https://fonts.googleapis.com/css?family=Jaldi:400,700|Merriweather:400,900' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
	<header class="header-alt">
			<div class="fond-header">
				<img src="<?php echo get_field('image_slider'); ?>" alt="" />
			</div>
		<div class="row">
			<div class="small-6 columns logo header-alt-logo">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/logo/logo-fond-fonce.svg" class="hvr-grow-rotate" alt="Logo Plait-il?" /></a>
			</div>
			<div class="small-6 columns menu-toogle">
				<a href="#cd-nav"  class="cd-nav-trigger header-alt-toogle">Menu
					<span class="cd-nav-icon"></span>
					<svg x="0px" y="0px" width="54px" height="54px" viewBox="0 0 54 54">
						<circle fill="transparent" stroke="#656e79" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
					</svg>
				</a>
				<div id="cd-nav" class="cd-nav">
					<div class="cd-navigation-wrapper">
						<div>
							<nav>
								<ul class="cd-primary-nav">
									<li><a href="<?php echo esc_url( home_url( '/' ) );?>" class="selected">Accueil</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) );?>#apropos-link" onClick="window.location.reload()">À propos</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) );?>#projet-link" onClick="window.location.reload()">Projets</a></li>
									<li><a href="<?php echo esc_url( home_url( '/' ) );?>#contact-link" onClick="window.location.reload()">Contact</a></li>
								</ul>
							</nav>
						</div><!-- .cd-half-block -->
					</div> <!-- .cd-navigation-wrapper -->
				</div> <!-- .cd-nav -->
			</div>
			<div class="small-12 columns text-header-alt">
					<h2><?php the_title(); ?></h2>
					<h3><?php echo get_field('sous_titre_du_projet'); ?></h3>
			</div>
		</div>
	</header>
	<div class="clear"></div>
	<main class="header-alt">

		<?php do_action( 'foundationpress_after_header' );
