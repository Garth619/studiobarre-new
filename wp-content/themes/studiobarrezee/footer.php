

<footer>
	
	<div class="social_media_wrapper">
		
		<span class="find_us">find us</span><!-- find_us -->
		
		<?php if(get_field( 'twitter','option')):?>
		
			<a href="<?php the_field( 'twitter','option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png" alt="twitter"/></a>
		
		<?php endif;?>
		
		<?php if(get_field( 'pinterest','option')):?>
		
			<a href="<?php the_field( 'pinterest','option' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/pinterest.png" alt="Pinterest"/></a>
		
		<?php endif;?>
		
		<?php if(get_field( 'instagram','option')):?>
		
			<a href="<?php the_field( 'instagram' ,'option'); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram2.png" alt="Instagram"/></a>
		
		<?php endif;?>
		
		<?php if(get_field( 'facebook','option')):?>
		
			<a href="<?php the_field( 'facebook','option' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png" alt="Facebook"/></a>
		
		<?php endif;?>
		
		<?php if(get_field( 'google','option')):?>
		
			<a href="<?php the_field( 'google','option' ); ?>" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.png" alt="Google"/></a>
		
		<?php endif;?>
		
		
		<a class="email_link mobile" href="mailto:<?php the_field( 'facebook','option' ); ?>"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png" alt="Email"/></a>
		
	</div><!-- social_media_wrapper -->
	
	<div class="newsletter">
		
		<a class="email_link desktop" href="mailto:<?php the_field( 'email','option'); ?>"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png"/></a>
		
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
			
		<?php my_global_footer_links();?>
	
	</ul>
	
	</div><!-- inner_copyright -->
	
</div><!-- copyright -->

</div><!-- wrapper -->

<?php wp_footer();?>


<?php the_field( 'footer_scripts','option'); ?>

</body>
</html>

