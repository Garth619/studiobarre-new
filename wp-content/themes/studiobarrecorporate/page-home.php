<?php /* Template Name: Home */ ?>

<?php get_header(); ?>


<div class="slideshow">
	
	
	<?php if(get_field('slideshow')): ?>
	
		<?php $count = 1; ?>
	 
		<?php while(has_sub_field('slideshow')): ?>
	 
			
	    
		<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
		
			<div class="slide_wrapper video_wrapper video_wrapper_<?php echo $count;?>">
			
				<a href="#">
		
					<img class="video_slide" data-lazy="<?php the_sub_field( 'slide' ); ?>"/>
		
				</a>
			
			</div><!-- slide_wrapper -->
			
	
			
			<?php else:?>
			
			
			<div class="slide_wrapper">
			
				<a href="<?php the_sub_field( 'page_link' ); ?>">
			
					<img data-lazy="<?php the_sub_field( 'slide' ); ?>"/>
	
				</a>
			
			</div><!-- slide_wrapper -->
		
			
		
		
		<?php endif;?>
		
		<?php $count++; ?>
		
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
	


</div><!-- slideshow -->

<div class="mobile_slides">
	
	
	<?php if(get_field('mobile_slideshow')): ?>
	
	 
		<?php while(has_sub_field('mobile_slideshow')): ?>
		
		
		
			<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
			
				<a href="#">
		
					<img class="video_slide" src="<?php the_sub_field( 'slide' ); ?>"/>
	
				</a>
			
			<?php else:?>
			
				<a href="<?php the_sub_field( 'page_link' ); ?>">
					
					<img src="<?php the_sub_field( 'slide' ); ?>"/>
				
				</a>
			
			<?php endif;?>
	 
			
	    
		<?php endwhile; ?>
	 
	<?php endif; ?>
	
	

	
</div><!-- mobile_slides -->





				
		
					
			
			<?php if(get_field('slideshow')): ?>
			
				<?php $count = 1; ?>
			 
				<?php while(has_sub_field('slideshow')): ?>
			 
					<?php if(get_sub_field( 'video_or_linked_slide' ) == 'Video'):?>
					
					
					<div class="video_overlay_wrapper video_overlay_wrapper_<?php echo $count;?>">
			
			<div class="video_inner_overlay">
		
		<span class="video_close">CLOSE X</span><!-- video_close -->
					
					
					
					
						<div class='embed-container'>
							
							<iframe id="youtube_player_<?php echo $count;?>" src='https://www.youtube.com/embed/<?php the_sub_field( 'video_link' ); ?>?enablejsapi=1&version=3&playerapiid=ytplayer' frameborder='0' allowfullscreen></iframe>
							
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
