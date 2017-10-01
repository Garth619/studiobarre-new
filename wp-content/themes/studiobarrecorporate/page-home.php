<?php /* Template Name: Home */ ?>

<?php get_header(); ?>


<div class="slideshow">
	
	
<?php if(get_field('slideshow')) {
	
	$count = 1;
	 
	while(has_sub_field('slideshow')) {
	 
		include ('slideshow.php');  
		
	}
} ?>
	
	
</div><!-- slideshow -->

<div class="mobile_slides">
	
	
<?php if(get_field('mobile_slideshow')) {
	
	$count = 1;
	 
	while(has_sub_field('mobile_slideshow')) {
	 
		include ('slideshow_mobile.php');  
		
	}
} ?>
	
</div><!-- mobile_slides -->


			<?php if(get_field('slideshow')): ?>
			
				<?php $count = 1; ?>
			 
				<?php while(has_sub_field('slideshow')): ?>
			 
					<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
					
					
					<div class="desktop video_overlay_wrapper video_overlay_wrapper_<?php echo $count;?>">
			
						<div class="video_inner_overlay">
		
							<span class="video_close">CLOSE X</span><!-- video_close -->
					
								<div class='embed-container'>
							
								<iframe class="youtube_player_<?php echo $count;?>" src='https://www.youtube.com/embed/<?php the_sub_field( 'video_link' ); ?>?enablejsapi=1&version=3&playerapiid=ytplayer' frameborder='0' allowfullscreen></iframe>
							
							</div><!-- embed-container -->
					
					</div><!-- video_inner_overlay -->
			
				</div><!-- video_overlay_wrapper -->

					
					<?php endif;?>
					
					<?php $count++;?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			
			
			<?php if(get_field('mobile_slideshow')): ?>
			
				<?php $count = 1; ?>
			 
				<?php while(has_sub_field('mobile_slideshow')): ?>
			 
					<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
					
					
					<div class="mobile video_overlay_wrapper video_overlay_wrapper_<?php echo $count;?>">
			
						<div class="video_inner_overlay">
		
							<span class="video_close">CLOSE X</span><!-- video_close -->
					
								<div class='embed-container'>
							
								<iframe class="youtube_player_<?php echo $count;?>" src='https://www.youtube.com/embed/<?php the_sub_field( 'video_link' ); ?>?enablejsapi=1&version=3&playerapiid=ytplayer' frameborder='0' allowfullscreen></iframe>
							
							</div><!-- embed-container -->
					
					</div><!-- video_inner_overlay -->
			
				</div><!-- video_overlay_wrapper -->

					
					<?php endif;?>
					
					<?php $count++;?>
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>



<div class="main_intro content">
	
	<h1>studio barre is... fun, effective and sassy</h1>
	
	<p>studio barre classes apply the perfect combination of arm, seat, thigh and ab exercises to define and sculpt the body. the 60-minute workout digs deep physically while the music and happy barre{tenders} keep you mentally in the moment and push you toward your best.</p>
	
	
</div><!-- main_intro -->



	
<?php get_footer(); ?>
