
<footer>
	
	<div class="social_media_wrapper">
		
		<span class="find_us">find us</span><!-- find_us -->
		
		<a href="https://twitter.com/studiobarre" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png"/></a>
		<a href="http://www.pinterest.com/studiobarre/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/pinterest.png"/></a>
		<a href="http://instagram.com/studiobarrestrengthdefined" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.png"/></a>
		<a href="https://www.facebook.com/StudioBarre/?ref=hl" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png"/></a>
		<a href="https://plus.google.com/+StudioBarreLaCostaCarlsbad/posts?hl=en" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.png"/></a>
		
	</div><!-- social_media_wrapper -->
	
	<div class="newsletter">
		
		<a href="mailto:info@studiobarre.com"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png"/></a>
		
		<div class="newsletter_form_wrapper">
			
			<span class="brackets">{</span>
			<span class="subscribe">subscribe</span><!-- subscribe -->
			<div class="newsletter_form"><?php gravity_form(1, false, false, false, '', true, 12); ?></div><!-- newsletter_form -->
			<span class="brackets">}</span>
			
		</div><!-- newsletter_form -->
		
	</div><!-- newsletter -->
	
</footer>

<div class="copyright">
	
	&copy; <?php echo date("Y"); ?> Studio Barre LLC.
	
</div><!-- copyright -->

</div><!-- wrapper -->

<?php wp_footer();?>


</body>
</html>
