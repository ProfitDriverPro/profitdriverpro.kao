<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

global $wp;
global $error_message;

	get_header(); 
?>
<?php get_template_part( 'template-parts/core', 'header' ); ?>

<section id="masthead">
	<div class="text animated-slow fadeInUpSmall">
		<h5>///</h5>
		<h1>Contact Us</h1>
		<p>Profit Driver Pro helps dealerships explore their databases with<br> intuitive functionality and intelligent automation.</p>
		<a href="/contact-us/#form"> <?php //We could set this to be a proper scroll to functionallity. ?>
			<div class="button">Contact Us</div>
		</a>

    </div>
</section>
<section id="form">
	<?php get_template_part( 'template-parts/core', 'errorBlock' ); ?>
	<?php get_template_part( 'template-parts/core', 'contactForm' ); ?>
</section>
<?php get_footer(); ?>
