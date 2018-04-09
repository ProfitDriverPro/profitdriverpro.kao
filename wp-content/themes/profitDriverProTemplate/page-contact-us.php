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
		<a href="<?php //echo home_url($wp->request ); ?>/#form"> <?php //We could set this to be a proper scroll to functionallity. ?>
			<div class="button">Contact Us</div>
		</a>

    </div>
</section>

<section id="form">
	<?php 

		 
	?>
	<?php if( is_wp_error($error_message) ){ ?>
	<div class="error-message" style="border:1px solid black;">
		<?php 
			echo $error_message->get_error_message();
		 ?>
	</div>
<?php } ?>
	<form action="" method="post">
		<div class="honey_pot">
			<!-- This is a hidden field shhh don't tell the robots -->
			<input type="text" value="" name="corporate_name" />
		</div>
		<label for="name">Full Name</label>
		<input type="text" name="name" title="name" value="<?php echo esc_attr($_POST['name']); ?>" placeholder="Full Name..." required>
		<label>Email</label>
		<input type="email" name="email" title="email" value="<?php echo esc_attr($_POST['email']); ?>" placeholder="Email..." required>
		<label>Why're you contacting us?</label>
		<select name="comm_reason">
			<option value="No reason" title="default" selected>----</option>
			<option value="Demo" title="demo">I would like a demo</option>
		 	<option value="learn_more" title="Learn More">I want to learn more</option>
		 	<option value="speak_more" title="Speak to some one">I would like to speak to some one</option>
		 	<option value="comment" title="Leave a comment">Just wanted to leave a comment</option>
		</select>
		<label for="comments">Comments</label>
		<textarea title="comments" placeholder="comments" name="comments" value="<?php echo esc_attr($_POST['comments']); ?>" ></textarea>
		<button type="submit">Contact Us</button>
	</form><!-- .content-area -->
</section>


<?php get_footer(); ?>
