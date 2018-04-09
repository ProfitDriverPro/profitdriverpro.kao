	<form action="" method="post">
		<div class="honey_pot">
			<input type="text" value="" name="corporate_name" /><!-- This is a hidden field shhh don't tell the robots -->
			<input type="hidden" name="form_name" value="contactForm" />
		</div>
		<label for="name">Full Name</label>
		<input type="text" name="name" title="name" value="<?php echo esc_attr($_POST['name']); ?>" placeholder="Full Name..." required>
		<label>Email</label>
		<input type="email" name="email" title="email" value="<?php echo esc_attr($_POST['email']); ?>" placeholder="Email..." required>
		<label for="comments">Comments</label>
		<textarea title="comments" placeholder="comments" name="comments" value="<?php echo esc_attr($_POST['comments']); ?>" ></textarea>
		<button type="submit">Contact Us</button>
	</form><!-- .content-area -->