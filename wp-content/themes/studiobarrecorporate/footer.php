
<footer>
	
	<div class="social_media_wrapper">
		
		<span class="find_us">find us</span><!-- find_us -->
		
		<a href="https://twitter.com/studiobarre" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/twitter.png"/></a>
		<a href="http://www.pinterest.com/studiobarre/" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/pinterest.png"/></a>
		<a href="http://instagram.com/studiobarrestrengthdefined" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/instagram.png"/></a>
		<a href="https://www.facebook.com/StudioBarre/?ref=hl" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/facebook.png"/></a>
		<a href="https://plus.google.com/+StudioBarreLaCostaCarlsbad/posts?hl=en" target="_blank"><img src="<?php bloginfo('template_directory');?>/images/google-plus.png"/></a>
		<a class="email_link mobile" href="mailto:info@studiobarre.com"><img class="email" src="<?php bloginfo('template_directory');?>/images/email.png"/></a>
		
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
			
		<li><a href="http://studiobarre-demo.com/teachers/">barre{tender} login</a></li>
		<li><a href="http://studiobarre-demo.com/owner-resources/">owner login</a></li>
	
	</ul>
	
	</div><!-- inner_copyright -->
	
</div><!-- copyright -->

</div><!-- wrapper -->

<?php wp_footer();?>

<?php if(is_front_page()):?>


<script type="text/javascript">

jQuery(document).ready(function(){



<?php if(get_field('slideshow')): ?>

	<?php $count = 1;?>
 
	<?php while(has_sub_field('slideshow')): ?>
	
	
	<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
 
 		$('.video_wrapper_<?php echo $count;?>').on('click', function(event) {
	
 		
 			$('.video_overlay_wrapper_<?php echo $count;?>').fadeIn(200);
		
	
		});
		
		$('.video_overlay_wrapper_<?php echo $count;?> span.video_close, .video_overlay_wrapper_<?php echo $count;?>').on('click', function(e) {
	
				$('#youtube_player_<?php echo $count;?>')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
	
		});
		
		
		
		<?php endif;?>   
	
	<?php $count++;?>
	
	<?php endwhile; ?>
 
<?php endif; ?>


}); // Document Ready

</script>


<?php endif;?>


</body>
</html>
