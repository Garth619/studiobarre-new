<?php if(is_front_page()):?>


<script type="text/javascript">

jQuery(document).ready(function(){



<?php if(get_field('slideshow')): ?>

	<?php $count = 1;?>
 
	<?php while(has_sub_field('slideshow')): ?>
	
	
	<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
 
 		$('.slideshow .video_wrapper_<?php echo $count;?>').on('click', function(event) {
	
 		
 			$('.desktop.video_overlay_wrapper_<?php echo $count;?>').fadeIn(200);
		
	
		});
		
		$('.desktop.video_overlay_wrapper_<?php echo $count;?> span.video_close, .video_overlay_wrapper_<?php echo $count;?>').on('click', function(e) {
	
				$('.desktop .youtube_player_<?php echo $count;?>')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
	
		});
		
		
		
		<?php endif;?>   
	
	<?php $count++;?>
	
	<?php endwhile; ?>
 
<?php endif; ?>




<?php if(get_field('mobile_slideshow')): ?>

	<?php $count = 1;?>
 
	<?php while(has_sub_field('mobile_slideshow')): ?>
	
	
	<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
 
 		$('.mobile_slides .video_wrapper_<?php echo $count;?>').on('click', function(event) {
	
 		
 			$('.mobile.video_overlay_wrapper_<?php echo $count;?>').fadeIn(200);
		
	
		});
		
		$('.mobile.video_overlay_wrapper_<?php echo $count;?> span.video_close, .video_overlay_wrapper_<?php echo $count;?>').on('click', function(e) {
	
				$('.mobile .youtube_player_<?php echo $count;?>')[0].contentWindow.postMessage('{"event":"command","func":"' + 'stopVideo' + '","args":""}', '*');
	
		});
		
		
		
		<?php endif;?>   
	
	<?php $count++;?>
	
	<?php endwhile; ?>
 
<?php endif; ?>





}); // Document Ready

</script>

<?php endif;?>
