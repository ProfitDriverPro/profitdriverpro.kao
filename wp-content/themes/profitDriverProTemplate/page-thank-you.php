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
 
	get_header(); 
?>
<?php get_template_part( 'template-parts/core', 'header' ); ?>
<section id="masthead">
	<div class="text animated-slow fadeInUpSmall">
		<h5>///</h5>
		<h1>Thank you</h1>
		<p>Thank you for taking the time to contact us. A representative will respond back to you within 48 business hours.</p>
		<a href="<?php echo home_url()?>"> <?php //We could set this to be a proper scroll to functionallity. ?>
			<div class="button">Go Home</div>
		</a>

    </div>
</section>