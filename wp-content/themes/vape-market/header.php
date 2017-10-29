<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- Customizer Styles -->
<style>

#header-top {
	background: <?php print get_theme_mod('header_bg_color'); ?>;
	color: #fff;
}
#header-top a {
	color: #fff;
}

.main-menu li a:hover {
	color: <?php print get_theme_mod('main_menu_hover_color'); ?>;
}

.main-menu .current-menu-item a {
	color: <?php print get_theme_mod('main_menu_hover_color'); ?>;
}

footer.footer {
	background-image: url( <?php Vape_Market_Render::renderSettingImageUrl('footer_image'); ?> );
	background-size:     cover;
  background-repeat:   no-repeat;
  background-position: center center;
	height: 374px;
	border-top: 5px solid #353535;
}

footer.subfooter {
	background: <?php print get_theme_mod('footer_bg_color'); ?>;
}

footer.subfooter2 {
	background: #353535;
	color: #fff;
	font-size: 0.75em;
	padding: 10px 0;
}

</style>

</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="header-top">

		<div class="vm-container">
			<div class="vm-row">

				<div class="vm-col-4 topbar-social">
					<?php Vape_Market_Render::renderSocialLinks(); ?>
				</div>

				<div class="vm-col-8" style="text-align: right;">
					<?php Vape_Market_Render::renderMenu('topbar'); ?>
				</div>

			</div>
		</div>

	</header>

	<header id="header">

		<div class="vm-container">
			<div class="vm-row">

				<div class="vm-col-3 vm-logo">
					<a href="<?php print home_url(); ?>">
						<?php Vape_Market_Render::renderImageByUrl( get_theme_mod('logo') ); ?>
					</a>
				</div>

				<div class="vm-col-6">
					<?php Vape_Market_Render::renderMenu('main'); ?>
				</div>

				<div class="vm-col-2">

				</div>

			</div>

		</div>

	</header>

	<header class="subheader">

		<div class="vm-container">
			<div class="vm-row">

				<div class="vm-col-6">
					<h1 class="page-title">
						<?php
							$title = wp_title('', false);
							print $title;
						?>
					</h1>
				</div>
			</div>
		</div>


	</header>
