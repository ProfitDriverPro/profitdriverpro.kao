	<header id="header" class="animated fadeInDown">
	    <a href="mailto:sales@profitdriverpro.com">
	        <div class="contact">
	            sales@profitdriverpro.com
	        </div>
	    </a>
		<div class="logo">
			<a href="http://www.profitdriverpro.com">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-tag.png" alt="logo">
			</a>
		</div>
	    <div class="navigation">
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'primary',
				)); 
			?>
		</div>
	</header>