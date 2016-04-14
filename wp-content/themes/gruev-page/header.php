<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gruev_page
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="keywords" content="">
	<meta name="discription" content="">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, maximum-scale=1.0 user-scalable=yes">
	<title>This is my page</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo(); ?>/favicon-32x32.ico" sizes="32x32">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo(); ?>/favicon-16x16.ico" sizes="16x16">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
