<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<title><?php echo esc_html( get_the_title() ); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|PT+Sans" rel="stylesheet">

	<meta name="description" content=""/>
	<link rel="canonical" href="http://profitdriverpro.com" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo esc_html( get_the_title() ); ?>" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="http://profitdriverpro.com" />
	<meta property="og:site_name" content="ProfitDriver Pro" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:site" content="" />
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-XXXX');</script>
	<!-- End Google Tag Manager -->



	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div id="body_wrap">
