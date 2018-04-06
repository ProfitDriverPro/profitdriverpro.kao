<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>


</div> <!-- end body wrap -->
		<footer id="footer"  role="contentinfo">
			<script type="application/ld+json">
				{
				  "@context": "http://schema.org",
				  "@type": "Corporation",
				  "name": "Profit Driver Pro",
				  "url": "http://profitdriverpro.com",
				  "logo": "http://profitdriverpro.com/img/logo-tag.png",
				  "contactPoint": {
				    "@type": "ContactPoint",
				    "telephone": "1 (800) 295-9070",
				    "contactType": "customer service",
				    "contactOption": "TollFree",
				    "areaServed": ["US","CA","150"]
				  },
				  "sameAs": [
				    "https://www.facebook.com/profitdriverpro/",
				    "https://ca.linkedin.com/company/profitdriverpro"
				  ]
				}
			</script>


			

		


				<ul class="office">
	                <li>
	                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flags/canada.png">
	                    <p>380 Wellington Street, Tower B, 6th Floor</p>
	                    <p>London, Ontario</p>
	                    <p>N6A 5B5</p>
	                    <p>1 (800) 295-9070</p>
	                </li>
	                <li>
	                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flags/us.png">
	                    <p>5000 Birch Street, West Tower, Suite 3000</p>
	                    <p>Newport Beach, CA</p>
	                    <p>92660</p>
	                    <p>1 (800) 295-9070</p>
	                </li>
	                <li>
	                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/flags/ireland.png">
	                    <p>26 Pembroke Street Upper, Suite 9976</p>
	                    <p>Dublin 2, Ireland</p>
	                    <p>D02 X361</p>
	                    <p>+353 1 234 3715</p>
	                </li>
            	</ul>
				<div class="top">
                <div class="logo">
    				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-tag.png">
    			</div>
                <div class="social">
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-facebook-square"></i>
                    <i class="fab fa-instagram"></i>
                </div>
                <ul class="navigation">
                   <a href="http://www.profitdriverpro.com/terms"><li>Terms & Conditions</li></a>
                   <a href="http://www.profitdriverpro.com/privacy"><li>Privacy Policy</li></a>
               </ul>
            	</div>

            	<!-- Need to add Sitemap.xml, links to internal pages -->
            	
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
