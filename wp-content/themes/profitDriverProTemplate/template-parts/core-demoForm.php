	<?php get_template_part( 'template-parts/core', 'errorBlock' ); ?>
	<form id="demoForm" name="demoForm" action="<?= admin_url('admin-post.php') ?>" method="post">
			<?php wp_nonce_field('car_form_nonce', 'car_form_nonce'); ?>
		<div class="honey_pot">
			<input type="text" value="" name="corporate_name" /><!-- This is a hidden field shhh don't tell the robots -->
			<input type="hidden"  name="form_name" value="demoForm" />
		</div>
		<label for="full_name">Full Name</label>
		<input type="text" name="full_name" title="full_name" value="<?php echo esc_attr($_POST['full_name']); ?>" placeholder="Full Name..." required>
		<label for="email">Email</label>
		<input type="email" name="email" title="email" value="<?php echo esc_attr($_POST['email']); ?>" placeholder="Email..." required>
		<label for="dealership">Dealership/Group</label>
		<input type="text" name="dealership" title="Dealership / Group" placeholder="Dealership / Group...">
		<label for="date">Prefered Date</label>
		<input name="date" id="js_date_picker" type="date">
		<label for="comments">Prefered Time</label>
		<input id="scrollDefaultExample" name="preferred_time" type="text" class="time ui-timepicker-input" autocomplete="off" placeholder="Preferred Time..." >
		<label for="comments">Comments</label>
		<textarea title="comments" placeholder="comments" name="comments" value="<?php echo esc_attr($_POST['comments']); ?>" ></textarea>
		<button type="submit">Book a Demo</button>
	</form><!-- .content-area -->

