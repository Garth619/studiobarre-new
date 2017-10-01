
<footer>
	
	<div class="social_media_wrapper">
		
		<span class="find_us">find us</span><!-- find_us -->
		
		<a href="<?php the_field( 'twitter','option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png"/></a>
		<a href="<?php the_field( 'pinterest','option' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/pinterest.png"/></a>
		<a href="<?php the_field( 'instagram' ,'option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.png"/></a>
		<a href="<?php the_field( 'facebook','option' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png"/></a>
		<a href="<?php the_field( 'google','option' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.png"/></a>
		<a class="email_link mobile" href="mailto:<?php the_field( 'facebook','option' ); ?>"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png"/></a>
		
	</div><!-- social_media_wrapper -->
	
	<div class="newsletter">
		
		<a class="email_link desktop" href="mailto:info@studiobarre.com"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png"/></a>
		
		<div class="newsletter_form_wrapper">
			
			<span class="brackets">{</span>
			<span class="subscribe">subscribe</span><!-- subscribe -->
			<div class="newsletter_form"><?php gravity_form(1, false, false, false, '', true, 12); ?></div><!-- newsletter_form -->
			<span class="brackets">}</span>
			
		</div><!-- newsletter_form -->
		
	</div><!-- newsletter -->
	
</footer>

<div class="copyright">
	
	<div class="inner_copyright">
	
	<span>&copy; <?php echo date("Y"); ?> Studio Barre LLC.</span>
		
	<ul>
			
		<li><a href="<?php the_field( 'teacher_resources_link','option'); ?>"><?php the_field( 'teacher_resources' ,'option'); ?></a></li>
		<li><a href="<?php the_field( 'owners_resources_link','option' ); ?>"><?php the_field( 'owners_resources','option' ); ?></a></li>
	
	</ul>
	
	</div><!-- inner_copyright -->
	
</div><!-- copyright -->

</div><!-- wrapper -->

<?php wp_footer();?>

<?php include('js/footerjs.php');?>
<?php the_field( 'footer_scripts','option'); ?>

</body>
</html>
