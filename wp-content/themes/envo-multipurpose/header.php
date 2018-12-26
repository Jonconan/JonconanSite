<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="content-type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<?php wp_head(); ?>
		<link rel=”SHORTCUT ICON” href=”/wp-content/uploads/2018/12/favicon.ico" />
	</head>
	<body id="blog" <?php body_class(); ?>>
		<div class="page-wrap">
		<?php get_template_part( 'template-parts/template-part', 'topnav' ); ?>
