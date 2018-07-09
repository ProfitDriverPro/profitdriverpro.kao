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

<section id="careers">
	<div class="masthead">
		<div class="text">
			<h5>CAREERS AT PROFIT DRIVER PRO</h5>
			<h1>Searching for a new and<br> exciting career?</h1>
		</div>
		<div class="side">
			<div class="line"></div>
		</div>
	</div>
	<?php get_template_part( 'template-parts/careers', 'postList' ); ?>
</section>
<?php get_footer(); ?>